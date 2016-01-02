<?php

namespace Dms\Common\Structure\FileSystem\Form;

use Dms\Common\Structure\FileSystem\UploadAction;
use Dms\Core\Exception\NotImplementedException;
use Dms\Core\File\IFile;
use Dms\Core\File\IUploadedFile;
use Dms\Core\Form\Builder\Form;
use Dms\Core\Form\Field\Builder\Field;
use Dms\Core\Form\Field\Builder\FileFieldBuilder;
use Dms\Core\Form\Field\Processor\CustomProcessor;
use Dms\Core\Form\Field\Processor\Validator\RequiredValidator;
use Dms\Core\Form\Field\Type\FileType;
use Dms\Core\Form\Field\Type\InnerFormType;
use Dms\Core\Form\IForm;
use Dms\Core\Language\Message;
use Dms\Core\Model\Type\Builder\Type;
use Pinq\Analysis\IType;

/**
 * The file upload field type.
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class FileUploadType extends InnerFormType
{
    const ATTR_EXTENSIONS = FileType::ATTR_EXTENSIONS;
    const ATTR_MIN_SIZE = FileType::ATTR_MIN_SIZE;
    const ATTR_MAX_SIZE = FileType::ATTR_MAX_SIZE;


    public function __construct()
    {
        parent::__construct($this->form());
    }

    /**
     * @inheritDoc
     */
    protected function initializeFromCurrentAttributes()
    {
        $this->attributes[self::ATTR_FORM] = $this->form(
                (bool)$this->get(self::ATTR_REQUIRED),
                $this->has(self::ATTR_INITIAL_VALUE)
        );

        parent::initializeFromCurrentAttributes();
    }

    /**
     * @param bool $isRequired
     * @param bool $hasExisting
     *
     * @return IForm
     */
    protected function form($isRequired = false, $hasExisting = false)
    {
        $allowedUploadActions = [UploadAction::STORE_NEW => 'Save New Upload'];

        if (!$isRequired || $hasExisting) {
            $allowedUploadActions[UploadAction::KEEP_EXISTING] = 'Keep Existing File';
        }

        if (!$isRequired && $hasExisting) {
            $allowedUploadActions[UploadAction::DELETE_EXISTING] = 'Delete Existing File';
        }

        return Form::create()
                ->section('File Upload', [
                        $this->fileField(Field::name('file')->label('File'))
                                ->attrs($this->getAll([self::ATTR_EXTENSIONS, self::ATTR_MAX_SIZE, self::ATTR_MIN_SIZE])),
                        Field::name('action')->label('Action')
                                ->enum(UploadAction::class, $allowedUploadActions)
                                ->required(),
                ])
                ->build();
    }

    /**
     * @param Field $field
     *
     * @return FileFieldBuilder
     */
    protected function fileField(Field $field)
    {
        return $field->file();
    }

    /**
     * @inheritDoc
     */
    protected function buildProcessors()
    {
        return array_merge(parent::buildProcessors(), [
                new CustomProcessor(
                        $this->processedType(),
                        function ($input, array &$messages) {
                            return $this->performUploadAction($input, $messages);
                        },
                        function (IFile $file) {
                            return [
                                    'file'   => $file,
                                    'action' => UploadAction::storeNew(),
                            ];
                        }
                )
        ]);
    }

    /**
     * @return IType
     */
    protected function processedType()
    {
        return Type::object(IUploadedFile::class);
    }

    /**
     * @param array $input
     * @param array $messages
     *
     * @return IFile|null
     * @throws NotImplementedException
     */
    protected function performUploadAction(array $input, array &$messages)
    {
        /** @var UploadAction $action */
        $action = $input['action'];

        switch ($action->getValue()) {
            case UploadAction::STORE_NEW:
                if (!isset($input['file'])) {
                    $messages[] = new Message(RequiredValidator::MESSAGE, ['field' => 'File']);

                    return null;
                }

                return $input['file'];

            case UploadAction::KEEP_EXISTING:
                return $this->get(self::ATTR_INITIAL_VALUE);

            case UploadAction::DELETE_EXISTING:
                return null;
        }

        throw NotImplementedException::format('Unknown upload action: %s', $action->getValue());
    }
}
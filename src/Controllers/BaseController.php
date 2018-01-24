<?php

namespace Solspace\Freeform\Controllers;

use craft\web\Controller;
use Solspace\Freeform\Freeform;
use Solspace\Freeform\Services\CrmService;
use Solspace\Freeform\Services\FieldsService;
use Solspace\Freeform\Services\FilesService;
use Solspace\Freeform\Services\FormsService;
use Solspace\Freeform\Services\MailerService;
use Solspace\Freeform\Services\MailingListsService;
use Solspace\Freeform\Services\NotificationsService;
use Solspace\Freeform\Services\SettingsService;
use Solspace\Freeform\Services\StatusesService;
use Solspace\Freeform\Services\SubmissionsService;

class BaseController extends Controller
{
    /**
     * @return FormsService
     */
    protected function getFormsService(): FormsService
    {
        return Freeform::getInstance()->forms;
    }

    /**
     * @return FieldsService
     */
    protected function getFieldsService(): FieldsService
    {
        return Freeform::getInstance()->fields;
    }

    /**
     * @return SubmissionsService
     */
    protected function getSubmissionsService(): SubmissionsService
    {
        return Freeform::getInstance()->submissions;
    }

    /**
     * @return MailerService
     */
    protected function getMailerService(): MailerService
    {
        return Freeform::getInstance()->mailer;
    }

    /**
     * @return MailingListsService
     */
    protected function getMailingListsService(): MailingListsService
    {
        return Freeform::getInstance()->mailingLists;
    }

    /**
     * @return CrmService
     */
    protected function getCrmService(): CrmService
    {
        return Freeform::getInstance()->crm;
    }

    /**
     * @return NotificationsService
     */
    protected function getNotificationsService(): NotificationsService
    {
        return Freeform::getInstance()->notifications;
    }

    /**
     * @return FilesService
     */
    protected function getFilesService(): FilesService
    {
        return Freeform::getInstance()->files;
    }

    /**
     * @return SettingsService
     */
    protected function getSettingsService(): SettingsService
    {
        return Freeform::getInstance()->settings;
    }

    /**
     * @return StatusesService
     */
    protected function getStatusesService(): StatusesService
    {
        return Freeform::getInstance()->statuses;
    }
}

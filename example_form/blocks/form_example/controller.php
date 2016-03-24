<?php
namespace Concrete\Package\ExampleForm\Block\FormExample;

use Concrete\Core\Block\BlockController;
use Acme\Validator;

class Controller extends BlockController
{
    public function getBlockTypeDescription()
    {
        return t('An example block');
    }

    public function getBlockTypeName()
    {
        return t('Form Example');
    }

    public function action_confirm($bID = false)
    {
        if ($this->bID != $bID) {
            return false;
        }

        if ($this->post()) {
            $e = Validator::validate($this->post());

            if (!$e->has()) {
                $this->set('name', $this->post('name'));
                $this->set('email', $this->post('email'));
                $this->render('confirm');
            }

            $this->set('e', $e);
        }
    }

    public function action_submit($bID = false)
    {
        if ($this->bID != $bID) {
            return false;
        }

        if ($this->post()) {
            $e = Validator::validate($this->post());

            if (!$e->has()) {
                \Log::info('Form submit.');
                // $db = \Database::connection('example');
                // $mailService = Core::make('mail');
                $this->render('submit');
            }

            $this->set('e', $e);
        }
    }
}

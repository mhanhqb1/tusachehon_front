<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Lib\Api;
use Cake\Core\Configure;

class ContactController extends AppController {

    public function index() {
        if ($this->request->is('post')) {
            // Trim data
            $data = $this->request->data();
            foreach ($data as $key => $value) {
                $data[$key] = trim($value);
            }
            $contact = Api::call(Configure::read('API.url_contacts_addupdate'), $data);
            $this->Flash->success("Cảm ơn bạn đã liên hệ, chúng tôi sẽ trả lời tin nhắn sớm nhất có thể.");
            return $this->redirect("{$this->BASE_URL}/lien-he");
        }
    }
}

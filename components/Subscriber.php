<?php namespace Andradedev\Subscribe\Components;

use Cms\Classes\ComponentBase;
use Andradedev\Subscribe\Models\Subscriber as Subs;

class Subscriber extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Subscriber Component',
            'description' => 'Form for adding new subscriber'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addJs('/plugins/andradedev/subscribe/assets/javascript/subscribe-scripts.js');
    }

    public function onAddSubscriber()
    {
        $data = [
            "email" => post('email'),
            "latitude" => post('latitude'),
            "longitude" => post('longitude')
        ];
        
        try{

            $subscriber = Subs::create($data);

            \Mail::send('andradedev.subscribe::mail.subscribe', $data, function($message) use ($data) {
                $message->to($data['email'], 'Hi New Subscriber');
            });

            $this->page['result'] = 'Gracias por subscribirte!';
        }
        catch (\Exception $e){

            $this->page['result'] = 'El correo ya esta dado de alta.';

        }
        
    }

}
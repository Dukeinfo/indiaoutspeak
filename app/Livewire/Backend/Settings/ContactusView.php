<?php

namespace App\Livewire\Backend\Settings;

use App\Models\ContactInfo;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ContactusView extends Component
{

    use WithFileUploads;
    use LivewireAlert;
    use UploadTrait;


    public $siteSettings;
    public $contactInfoId;
    public $top_logo;
    public $topLogo;

    public $footer_logo;
    public $footerLogo;

    public $Mobile_ios;
    public $MobileIos;

    public $Mobile_android;
    public $MobileAndroid;

    public $favicon;
    public $siteFavicon;

    public $apple_touch_icon;
    public $appleTouchIcon;

    public $admin_panel_logo;
    public $adminPanelLogo;


    public $Mobile_ios_link;
    public $Mobile_android_link;
    public $disclaimer;
    public $email;
    public $phone;
    public $website;
    public $alternate_phone;
    public $address;
    public $address2;
    public $copyright;
    public $designed_by;
    public $zip_code;
    public $admin_copyright;
    // public $admin_website_name;

    public function mount()
    {
        try {
            $this->siteSettings = ContactInfo::first();
            if(isset(  $this->siteSettings )){

            // Populate form fields with existing data
            $this->contactInfoId = $this->siteSettings->id;
            $this->topLogo = $this->siteSettings->top_logo;
            $this->footerLogo = $this->siteSettings->footer_logo;
            $this->MobileIos = $this->siteSettings->Mobile_ios;
            $this->MobileAndroid = $this->siteSettings->Mobile_android;
            $this->adminPanelLogo = $this->siteSettings->admin_panel_logo;
            $this->siteFavicon = $this->siteSettings->favicon;
            $this->appleTouchIcon = $this->siteSettings->apple_touch_icon;
            $this->admin_copyright = $this->siteSettings->admin_copyright;
            // $this->admin_website_name = $this->siteSettings->admin_website_name;
            $this->Mobile_ios_link = $this->siteSettings->Mobile_ios_link;
            $this->Mobile_android_link = $this->siteSettings->Mobile_android_link;
            $this->disclaimer = $this->siteSettings->disclaimer;
            $this->email = $this->siteSettings->email;
            $this->website = $this->siteSettings->website;
            $this->phone = $this->siteSettings->phone;
            $this->alternate_phone = $this->siteSettings->alternate_phone;
            $this->address = $this->siteSettings->address;
            $this->address2 = $this->siteSettings->address2;
            $this->copyright = $this->siteSettings->copyright;
            $this->designed_by = $this->siteSettings->designed_by;
            $this->zip_code = $this->siteSettings->zip_code;
            }
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '42S02') {
                $this->alert('error', 'Attempted to access missing table'.$e->getMessage(), [
                    'toast' => false,
                    'position' => 'center'
                ]);
                Log::warning("Attempted to access missing table: " . $e->getMessage());
                // Optionally, load default settings or skip the operation
                $this->siteSettings  = collect(); // Return an empty collection or a default value
            } else {
                throw $e; // Re-throw if it's not the specific error you're looking for
            }
    
         
        }
            
    }
    public function render()
    {

        return view('livewire.backend.settings.contactus-view');
    }

    public function store()
    {
         $this->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'disclaimer' => 'required|string',
            'website' => 'required|string',
        ]);

        // Handle the logo file upload (if provided
        if ($this->contactInfoId) {
            $setting = ContactInfo::findOrFail($this->contactInfoId);
            $setting->update($this->getFormData());
            $action = 'Update';
        } 
    
        else {
            $setting = ContactInfo::create($this->getFormData());
            $action = 'Save';
        }

        logActivity(
            'setting',
            $setting,
            [
           
                'Contact id'    => $setting->id,
                'Contact email' => $setting->email ,
            ],
            $action,
            'Site setting ' . $action . 'd'
        );

        // Emit an event to notify the parent component (if needed)


        // Reset the form fields after successful data storage
   
            $this->alert('success', ' Contact information '. ucfirst($action) .' successfully');
            return redirect()->route('contact_view');
      
        


    }




    private function getFormData()
    {


        $topLogoFileName = null;
        $footerLogoFileName = null;
        $adminLogoFileName = null;
        $iosFileName = null;
        $androidFileName = null;
        $faviconFileName = null;
        $appleTouchFileName = null;


        // Handling footer logo
        $topLogoFileName = $this->handleImageUpload($this->top_logo, $this->siteSettings->top_logo ?? null, 'top_logo', '/logos');
        $footerLogoFileName = $this->handleImageUpload($this->footer_logo, $this->siteSettings->footer_logo ?? null, 'footer_logo', '/logos');
        $adminLogoFileName = $this->handleImageUpload($this->admin_panel_logo, $this->siteSettings->admin_panel_logo ?? null, 'admin_panel_logo', '/logos');
      
        $iosFileName = $this->handleImageUpload($this->Mobile_ios, $this->siteSettings->Mobile_ios ?? null, 'Mobile_ios', '/logos');
        $androidFileName = $this->handleImageUpload($this->Mobile_android, $this->siteSettings->Mobile_android ?? null, 'Mobile_android', '/logos');
        $faviconFileName = $this->handleImageUpload($this->favicon, $this->siteSettings->favicon ?? null, 'favicon', '/logos');
        $appleTouchFileName = $this->handleImageUpload($this->apple_touch_icon, $this->siteSettings->apple_touch_icon ?? null, 'apple_touch_icon', '/logos');


        // Handling top logo

        return [
            'top_logo' => $topLogoFileName,
            'footer_logo' => $footerLogoFileName,
            'admin_panel_logo' => $adminLogoFileName,
            'Mobile_ios' => $iosFileName,
            'Mobile_android' => $androidFileName,
            'favicon' => $faviconFileName,
            'apple_touch_icon' => $appleTouchFileName,

            'admin_copyright' => $this->admin_copyright,
            // 'admin_website_name' => $this->admin_website_name,
            'Mobile_ios_link' => $this->Mobile_ios_link,
            'Mobile_android_link' => $this->Mobile_android_link,
            'disclaimer' => $this->disclaimer,
            'email' => $this->email,
            'website' => $this->website,
            'phone' => $this->phone,
            'alternate_phone' => $this->alternate_phone,
            'address' => $this->address,
            'address2' => $this->address2,
            'copyright' => $this->copyright,
            'designed_by' => $this->designed_by,
            'zip_code' => $this->zip_code,
            // Add other system settings as needed
        ];
    }
    

    

    private function handleImageUpload($newImage, $existingImage, $fieldName, $folder)
    {
        if (!is_null($newImage)) {
            if ($this->contactInfoId) {
                $this->unlinkImage(ContactInfo::find($this->contactInfoId), $fieldName, $folder);
            }
            return $this->uploadOne($newImage, $folder)['file_name'];
        }
        return $existingImage;
    }


}

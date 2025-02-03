<?php

namespace App\Http\Controllers;

use App\Settings\AboutSettings;
use App\Settings\BannerSettings;
use App\Settings\ContactSettings;
use App\Settings\GallerySettings;
use App\Settings\MenuSettings;
use App\Settings\SocialMediaSettings;
use Awcodes\Curator\Models\Media;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $banner, $about, $gallery, $menu, $socmed, $contact;

    public function __construct(
        BannerSettings $bannerSettings,
        AboutSettings $aboutSettings,
        GallerySettings $gallerySettings,
        MenuSettings $menuSettings,
        SocialMediaSettings $socialMediaSettings,
        ContactSettings $contactSettings
    ) {
        $this->banner = $bannerSettings;
        $this->about = $aboutSettings;
        $this->gallery = $gallerySettings;
        $this->menu = $menuSettings;
        $this->socmed = $socialMediaSettings;
        $this->contact = $contactSettings;

        // Banner
        foreach($bannerSettings->banners as $key => $banner) {
            switch($banner['type']) {
                case 'Video':
                    $video = Media::find($banner['data']['video']);
                    $poster = Media::find($banner['data']['poster']);
                    $this->banner->banners[$key]['data']['video'] = $video->url;
                    $this->banner->banners[$key]['data']['poster'] = $poster->url;
                    break;
                case 'Image':
                    $media = Media::find($banner['data']['image']);
                    $this->banner->banners[$key]['data']['image'] = $media->url;
                    break;
            }
        }

        // About
        $about_video_thumbnail = Media::find($aboutSettings->about_video_thumbnail);
        $this->about->about_video_thumbnail = $about_video_thumbnail->url;

        foreach($aboutSettings->about_provide as $key => $provide) {
            $media = Media::find($provide['image']);
            $this->about->about_provide[$key]['image'] = $media->url;
        }

        // Gallery
        foreach($gallerySettings->galleries as $key => $gallery) {
            $media = Media::find($gallery['image']);
            $this->gallery->galleries[$key]['image'] = $media->url;
        }

        // Social Media
        foreach($socialMediaSettings->socmed_links as $key => $socmed) {
            $media = Media::find($socmed['background']);
            $this->socmed->socmed_links[$key]['background'] = $media->url;
        }

        foreach($socialMediaSettings->socmed_links as $key => $socmed) {
            $media = Media::find($socmed['icon']);
            $this->socmed->socmed_links[$key]['icon'] = $media->url;
        }

        // Contact
        foreach($contactSettings->contact_links as $key => $contact) {
            $media = Media::find($contact['icon']);
            $this->contact->contact_links[$key]['icon'] = $media->url;
        }
    }

    public function index()
    {
        return view('welcome', [
            'banner' => $this->banner,
            'about' => $this->about,
            'gallery' => $this->gallery,
            'menu' => $this->menu,
            'socmed' => $this->socmed,
            'contact' => $this->contact,
        ]);
    }
}

<div>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Manage Site Settings</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Site Settings </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title">Manage Site Settings </h4>
                        </div>

                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form wire:submit="store" enctype="multipart/form-data">

                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="card  card-success">
                                            <div class="card-header">
                                                <h3 class="card-title"> Frontend Settings </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="top_logo" class="form-label">Top Logo</label>
                                            <input wire:model="top_logo" type="file" class="form-control"
                                                id="top_logo">
                                                <i wire:target="top_logo" wire:loading.class="fas fa-1x fa-sync fa-spin"></i>
                                               
                                                <img src="{{ isset($topLogo) ? getSiteLogos($topLogo): asset('no_image.jpg') }}"
                                                alt=".." style="max-width: 100%; max-height: 50px;"
                                                class="mt-2">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="footer_logo" class="form-label">Footer Logo</label>
                                            <input wire:model="footer_logo" type="file" class="form-control"
                                                id="footer_logo">
                                                <i wire:target="footer_logo" wire:loading.class="fas fa-1x fa-sync fa-spin"></i>
                                                @error('footer_logo')   <span class="text-danger"> {{$message}} </span>  @enderror
                                                <img src="{{ isset($footerLogo) ? getSiteLogos($footerLogo): asset('no_image.jpg') }}"
                                                alt=".." style="max-width: 100%; max-height: 50px;"
                                                class="mt-2">
                                            </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="Mobile_ios" class="form-label">Mobile iOS Logo </label>
                                            <input wire:model="Mobile_ios" type="file" class="form-control"
                                                id="Mobile_ios">
                                                <i wire:target="Mobile_ios" wire:loading.class="fas fa-1x fa-sync fa-spin"></i>
                                                @error('Mobile_ios')   <span class="text-danger"> {{$message}} </span>  @enderror
                                                <img src="{{ isset($MobileIos) ? getSiteLogos($MobileIos): asset('no_image.jpg') }}"
                                                alt=".." style="max-width: 100%; max-height: 50px;"
                                                class="mt-2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="Mobile_ios_link" class="form-label">Mobile iOS Link</label>
                                            <input wire:model="Mobile_ios_link" type="text" class="form-control"
                                                id="Mobile_ios_link">
                                                @error('Mobile_ios_link')   <span class="text-danger"> {{$message}} </span>  @enderror
                                             
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="Mobile_android" class="form-label">Mobile Android Logo</label>
                                            <input wire:model="Mobile_android" type="file" class="form-control"
                                                id="Mobile_android">
                                                <i wire:target="Mobile_android" wire:loading.class="fas fa-1x fa-sync fa-spin"></i>
                                                @error('Mobile_android')   <span class="text-danger"> {{$message}} </span>  @enderror
                                                <img src="{{ isset($MobileAndroid) ? getSiteLogos($MobileAndroid): asset('no_image.jpg') }}"
                                                alt=".." style="max-width: 100%; max-height: 50px;"
                                                class="mt-2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="Mobile_android_link" class="form-label">Mobile Android App
                                                Link</label>
                                            <input wire:model="Mobile_android_link" type="text" class="form-control"
                                                id="Mobile_android_link">
                                                @error('Mobile_android_link')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="favicon" class="form-label">Favicon</label>
                                            <input wire:model="favicon" type="file" class="form-control"
                                                id="favicon">
                                                <i wire:target="favicon" wire:loading.class="fas fa-1x fa-sync fa-spin"></i>
                                                @error('favicon')   <span class="text-danger"> {{$message}} </span>  @enderror
                                                <img src="{{ isset($siteFavicon) ? getSiteLogos($siteFavicon): asset('no_image.jpg') }}"
                                                alt=".." style="max-width: 100%; max-height: 50px;"
                                                class="mt-2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="apple_touch_icon" class="form-label">Apple Touch Icon</label>
                                            <input wire:model="apple_touch_icon" type="file" class="form-control"
                                                id="apple_touch_icon">
                                                <i wire:target="apple_touch_icon" wire:loading.class="fas fa-1x fa-sync fa-spin"></i>
                                                @error('apple_touch_icon')   <span class="text-danger"> {{$message}} </span>  @enderror
                                                <img src="{{ isset($appleTouchIcon) ? getSiteLogos($appleTouchIcon): asset('no_image.jpg') }}"
                                                alt=".." style="max-width: 100%; max-height: 50px;"
                                                class="mt-2">
                                        </div>
                                    </div>

                              
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input wire:model="email" type="email" class="form-control"
                                                id="email">
                                                @error('email')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="website" class="form-label">Website</label>
                                            <input wire:model="website" type="text" class="form-control"
                                                id="website">
                                                @error('website')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input wire:model="phone" type="text" class="form-control"
                                                id="phone">
                                                @error('phone')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="alternate_phone" class="form-label">Alternate Phone</label>
                                            <input wire:model="alternate_phone" type="text" class="form-control"
                                                id="alternate_phone">
                                                @error('alternate_phone')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea wire:model="address" class="form-control" id="address"></textarea>
                                            @error('address')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="address2" class="form-label">Address 2</label>
                                            <textarea wire:model="address2" class="form-control" id="address2"></textarea>
                                            @error('address2')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="disclaimer" class="form-label">Disclaimer</label>
                                            <textarea wire:model="disclaimer" class="form-control" id="disclaimer"></textarea>
                                            @error('disclaimer')   <span class="text-danger"> {{$message}} </span>  @enderror
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="copyright" class="form-label">Copyright</label>
                                            <input wire:model="copyright" type="text" class="form-control"
                                                id="copyright">
                                            @error('copyright')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="designed_by" class="form-label">Maintained & Designed By</label>
                                                <input type="text" wire:model="designed_by" class="form-control"
                                                    id="designed_by">
                                                   @error('designed_by')   <span class="text-danger"> {{$message}} </span>  @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="zip_code" class="form-label">Zip Code</label>
                                                <input type="text" wire:model="zip_code" class="form-control"
                                                    id="zip_code">
                                                   @error('zip_code')   <span class="text-danger"> {{$message}} </span>  @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="card  card-success">
                                            <div class="card-header">
                                                <h3 class="card-title"> Admin Settings </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="admin_panel_logo" class="form-label">Admin Panel Logo</label>
                                            <input wire:model="admin_panel_logo" type="file" class="form-control"
                                                id="admin_panel_logo">
                                                <i wire:target="admin_panel_logo" wire:loading.class="fas fa-1x fa-sync fa-spin"></i>

                                                @error('admin_panel_logo')   <span class="text-danger"> {{$message}} </span>  @enderror

                                                <img src="{{ isset($adminPanelLogo) ? getSiteLogos($adminPanelLogo): asset('no_image.jpg') }}"
                                                alt=".." style="max-width: 100%; max-height: 50px;"
                                                class="mt-2">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="admin_copyright" class="form-label">Admin Copyright</label>
                                            <input wire:model="admin_copyright" type="text" class="form-control"
                                                id="admin_copyright">
                                                @error('admin_copyright')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="admin_website_name" class="form-label">Admin Website
                                                Name</label>
                                            <input wire:model="admin_website_name" type="url"
                                                class="form-control" id="admin_website_name">
                                                @error('admin_website_name')   <span class="text-danger"> {{$message}} </span>  @enderror

                                        </div>
                                    </div> --}}
                                </div>
                                <div>
                                    <button type="submit" wire:loading.attr="disabled"
                                        class="btn btn-primary w-md">Update Profile</button>
                                    <i wire:target="store" wire:loading.class="fas fa-1x fa-sync fa-spin"></i>
                                </div>


                             </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>

</div>

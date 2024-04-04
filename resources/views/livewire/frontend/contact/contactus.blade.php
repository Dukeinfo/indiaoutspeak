<form id="contact_form" wire:submit.prevent="send">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-6">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" wire:model="name" name="firstName" placeholder="Enter your name" class="form-control @error('name') is-invalid @enderror">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-6">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" id="email" wire:model="email" name="conEmail" placeholder="Enter your email address" class="form-control @error('email') is-invalid @enderror">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-6">
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" id="phone" wire:model="phone" name="conPhone" placeholder="Enter your phone number" autocomplete="off" class="form-control @error('phone') is-invalid @enderror">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-6">
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" id="subject" wire:model="subject" name="conSubject" placeholder="Enter the subject" class="form-control @error('subject') is-invalid @enderror">
                @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="conMessage" wire:model="message" placeholder="Enter your message" class="form-control @error('message') is-invalid @enderror"></textarea>
                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" wire:loading.attr="disabled" wire:target="send" class="btn btn-primary">
                <span wire:loading.remove>Send Message</span>
                <span wire:loading>Sending...</span>
            </button>
            
            
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
</form>
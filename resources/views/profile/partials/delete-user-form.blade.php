<section class="py-4">
    <header class="mb-4">
        <h2 class="h4  fw-bold">
            {{ __('Delete Account') }}
        </h2>
        <p class="text-muted">
            {{ __('Setelah akun Anda dihapus, semua sumber daya dan data yang terkait akan dihapus secara permanen. Sebelum menghapus akun Anda, silakan unduh data atau informasi apa pun yang ingin Anda simpan.') }}
        </p>
    </header>

    <button 
        type="button" 
        class="btn btn-danger" 
        data-bs-toggle="modal" 
        data-bs-target="#confirmUserDeletionModal">
        {{ __('Delete Account') }}
    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="confirmUserDeletionModalLabel">
                        {{ __('Confirm Account Deletion') }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>
                    <form id="deleteAccountForm" method="post" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('delete')

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="form-control" 
                                placeholder="{{ __('Password') }}" 
                                required>
                            @if ($errors->userDeletion->has('password'))
                                <div class="text-danger mt-2">
                                    {{ $errors->userDeletion->first('password') }}
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" form="deleteAccountForm" class="btn btn-danger">
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

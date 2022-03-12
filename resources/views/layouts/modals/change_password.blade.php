<!-- Modal -->
<div class="modal fade" id="modal_password" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="modal_passwordLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_passwordLabel">{{__('Password')}} {{__('change')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('profile_password_store')}}" method="POST">
        @csrf
        @method('PATCH')
      <div class="modal-body">
        <div class="form-group">
          <label for="password_old">{{ __('Password old') }}</label>
          <input id="password_old" type="password" class="form-control @error('password_old') is-invalid @enderror" name="password_old" required autocomplete="current-password_old" placeholder="{{ __('Password old') }}">

          @error('password_old')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password new') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password new') }}">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password New') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password New') }}">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
        <button type="submit" class="btn btn-sm btn-primary">{{__('Update')}}</button>
      </div>
      </form>
    </div>
  </div>
</div>
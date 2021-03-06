@extends($layout)

@section('content')
  <div class="uk-grid-small uk-flex-center" uk-grid>
    <div class="uk-width-1-3">
      <div class="uk-card uk-card-default">
        <div class="uk-card-header uk-background-gray-lighter">
          <strong>
            <i class="fa fa-fw fa-exclamation-triangle uk-text-gw2"></i>
            Your account has been blocked from accessing this site
          </strong>
        </div>
        <div class="uk-card-body">
          Please contact a manager or site developer for assistance.
        </div>
      </div>
    </div>
  </div>
@endsection

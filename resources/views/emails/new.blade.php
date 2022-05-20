@component('mail::message')
# @lang('Hello!')

@lang('Your :app account logged in from a new device.', ['app' => $account->name])

> **@lang('Account:')** {{ $account->email }}<br/>
> **@lang('Time:')** {{ $time->toCookieString() }}<br/>
> **@lang('IP Address:')** {{ $ipAddress }}<br/>
> **@lang('Browser:')** {{ $browser }}<br/>
@if (!is_null($location))
> **@lang('Location:')** {{ $location['city'] ?? __('Unknown City') }}, {{ $location['regionName'], __('Unknown State') }}, {{ $location['country'], __('Unknown Country') }}
@endif

@lang('If this was you, you can ignore this alert. If you suspect any suspicious activity on your account, please change your password.')

@lang('Regards,')<br/>
{{ config('app.name') }}
@endcomponent

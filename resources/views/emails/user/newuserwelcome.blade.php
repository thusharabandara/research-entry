@component('mail::message')
# Welcome to Research Entry
 
Thanks for signing up. **we really appreciate** it. Let us _know if we can_ do more to please you! 

{{-- @component('mail::panel')

@endcomponent --}}

@component('mail::button', ['url' => 'http://researchentry.dev/home'])
View my Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

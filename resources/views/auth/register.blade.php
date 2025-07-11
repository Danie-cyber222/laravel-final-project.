<x-layout>
  <x-page-heading>Register</x-page-heading>

  <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
    <x-forms.input label="Your Name" name="name" />
    <x-forms.input label="Email Address" name="email" type="email" />
    <x-forms.input label="Password" name="password" type="password" />
    <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />

    <x-forms.divider />

     <x-forms.input label=" Employer" name="employer" />
     <x-forms.input label=" Employer Logo" name="logo" type="file" />


    <x-forms.button>Create Account</x-forms.button>
  </x-forms.form>
</x-layout>

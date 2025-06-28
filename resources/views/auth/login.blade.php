<x-layout>
  <x-page-heading>Log in</x-page-heading>

  <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
    <x-forms.input label="Email Address" name="email" type="email" />
    <x-forms.input label="Password" name="password" type="password" />
    <x-forms.button>Log in</x-forms.button>
  </x-forms.form>
</x-layout>

@extends('app')




@section('content')
<section class="relative bg-gradient-to-br from-blue-50 to-blue-100 py-20">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2">

            {{-- Left side: info --}}
            <div class="bg-blue-600 p-10 flex flex-col justify-center text-white">
                <h2 class="text-4xl font-extrabold mb-6">Get in Touch</h2>
                <p class="mb-6 text-blue-100">
                    Have a question, feedback, or want to collaborate? Fill out the form and we will get back to you promptly.
                </p>
                <ul class="space-y-4 text-blue-100">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7-7 7 7M5 21h14"/></svg>
                        123 Main Street, Your City
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 2a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8z"/></svg>
                       nandayekhaungkyaw@gmail.com
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7-7 7 7"/></svg>
                        +1 (555) 123-4567
                    </li>
                </ul>
            </div>

            {{-- Right side: form --}}
            <div class="p-10">
                @if(session('success'))
                    <div class="mb-4 p-4 rounded bg-green-100 text-green-800">
                        {{ session('success') }}
                    </div>
                @endif

                <form id="contactForm" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" value="{{ old('name') }}"
                               class="mt-1 block w-full rounded-xl border-gray-300
                                      focus:ring-blue-500 focus:border-blue-500 p-3 shadow-sm
                                      placeholder-gray-400" placeholder="Your Name">
                        @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" value="{{ old('email') }}"
                               class="mt-1 block w-full rounded-xl border-gray-300
                                      focus:ring-blue-500 focus:border-blue-500 p-3 shadow-sm
                                      placeholder-gray-400" placeholder="you@example.com">
                        @error('email')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" rows="5"
                                  class="mt-1 block w-full rounded-xl border-gray-300
                                         focus:ring-blue-500 focus:border-blue-500 p-3 shadow-sm
                                         placeholder-gray-400" placeholder="Write your message...">{{ old('message') }}</textarea>
                        @error('message')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700
                                   text-white font-bold py-3 px-6 rounded-xl shadow-lg focus:ring-2 focus:ring-blue-500
                                   transition-all duration-200">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e){
    e.preventDefault(); // prevent form submission

    const name = encodeURIComponent(document.getElementById('name').value);
    const email = encodeURIComponent(document.getElementById('email').value);
    const message = encodeURIComponent(document.getElementById('message').value);

    const mailtoLink = `mailto:nandayekhaungkyaw@gmail.com?subject=Contact Form&body=Name: ${name}%0AEmail: ${email}%0AMessage: ${message}`;

    window.location.href = mailtoLink; // open default mail client

    // Optionally, you can show a success message or clear the form here
    alert('Your default mail client should open now. Please send the email from there.');
    this.reset(); // clear the form
});
</script>
@endsection


@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<main class="py-10">
    <div class="px-4 sm:px-6 lg:px-8">
        <h2 class="text-center font-['Inter'] text-2xl uppercase font-semibold py-2">Edit Contestant</h2>
        <div class="overflow-hidden rounded-lg bg-gray-200">
            <div class="px-4 py-5 sm:p-6">
                <form action="{{route('contestants.store')}}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="grid grid-cols-3 gap-2">
                        <div class="col-span-2 bg-gray-50 p-4 rounded-lg">
                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                                <div class="mt-2">
                                    <input type="text" name="firstname" id="first-name" autocomplete="first-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Last name</label>
                                <div class="mt-2">
                                    <input type="text" name="lastname" id="last-name" autocomplete="last-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <label for="address" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Address</label>
                                <div class="mt-2">
                                    <input type="text" name="address" id="address" autocomplete="address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <div class="grid grid-cols-2 gap-2 mt-4">
                                    <div>
                                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                                        <div class="mt-2">
                                            <input type="text" name="city" id="city" autocomplete="city" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="state" class="block text-sm font-medium leading-6 text-gray-900">State</label>
                                        <div class="mt-2">
                                            <input type="text" name="state" id="state" autocomplete="state" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-2 mt-4">
                                    <div>
                                        <label for="date_of_birth" class="block text-sm font-medium leading-6 text-gray-900">Date of Birth</label>
                                        <div class="mt-2">
                                            <input type="date" name="date_of_birth" id="date_of_birth" autocomplete="date_of_birth" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                                        <div class="mt-2">
                                            <input type="text" name="phone" id="phone" autocomplete="phone" placeholder="+234" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                </div>
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900 mt-4">Email Address</label>
                                <div class="mt-2">
                                    <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <label for="about" class="block text-sm font-medium leading-6 text-gray-900 mt-4">About</label>
                                <div class="mt-2">
                                    <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                                <div class="mt-6 text-right space-x-2">
                                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        Submit
                                    </button>
                                    <button type="button" onclick="deleteContestant()" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="backdrop-blur-xl bg-white/30 col-span-1 p-4 rounded-lg">
                            <div class="text-center">
                                <!-- Profile image preview -->
                                <img id="profile-image" class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Profile Image">
                                <!-- Button to trigger file input -->
                                <button type="button" onclick="document.getElementById('profile-image-upload').click()" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Change Profile Image
                                </button>
                                <input type="file" id="profile-image-upload" onchange="resizeImage()" class="hidden">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

<script>
    function resizeImage() {
        const file = document.getElementById('profile-image-upload').files[0];
        const form = document.getElementById('form');
        if (!file) {
            alert("Please select an image file.");
            return;
        }

        const reader = new FileReader();
        reader.onload = function(event) {
            const image = new Image();
            image.onload = function() {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');

                // Set desired dimensions (fit-to-width)
                const maxWidth = 300; // Replace with your desired width
                const aspectRatio = image.width / image.height;
                let newWidth = maxWidth;
                let newHeight = newWidth / aspectRatio;

                if (newHeight > maxWidth) {
                    newHeight = maxWidth;
                    newWidth = newHeight * aspectRatio;
                }

                canvas.width = newWidth;
                canvas.height = newHeight;
                ctx.drawImage(image, 0, 0, newWidth, newHeight);

                const resizedImageData = document.createElement('input');
                resizedImageData.type = 'hidden';
                resizedImageData.name = 'resized_image';
                resizedImageData.value = canvas.toDataURL('image/jpeg', 0.7); // Adjust quality (0-1)
                form.appendChild(resizedImageData);

                // Set the resized image source
                document.getElementById('profile-image').src = canvas.toDataURL('image/jpeg', 0.7); // Adjust quality (0-1)
            };
            image.src = event.target.result;
        };
        reader.readAsDataURL(file);
    }

    function deleteContestant() {
        if(confirm("Are you sure you want to delete this contestant?")) {
            // Add delete logic here
        }
    }
</script>

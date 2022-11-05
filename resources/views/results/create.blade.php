@extends('layouts.app')

@section('content')
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-3 md:mt-0">
                <form action="{{route('results.store')}}" method="POST">
                    @csrf
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="flex flex-col space-y-2 md:space-y-4">
                                <div class="flex flex-col space-y-1 md:space-y-2">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Course
                                        Code</label>
                                    <input type="text" name="course_code" id="first-name" value="{{old('course_code')}}"
                                           autocomplete="course_code"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('course_code')
                                    <span class="text-red-500">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="flex flex-col space-y-1 md:space-y-2">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Course
                                        Name</label>
                                    <input type="text" name="course_name" id="email-address"
                                           value="{{old('course_name')}}" autocomplete="course_name"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('course_name')
                                    <span class="text-red-500">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="flex flex-col space-y-1 md:space-y-2">
                                    <label for="street-address"
                                           class="block text-sm font-medium text-gray-700">Time</label>
                                    <input type="datetime-local" name="time" id="street-address"
                                           value="{{old('time')}}"
                                           autocomplete="time"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('time')
                                    <span class="text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

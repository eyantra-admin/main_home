@extends('layout.main')
@section('content')

            <!-- e-Yantra events -->

            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" >
                <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">e-Yantra Events</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <!-- right coloum -->
                    <div class="w-full">
                        
                        <div class="flex flex-wrap bg-white p-3 items-center" data-aos="fade-up" data-aos-duration="1500">
                            <form class="w-full flex flex-wrap" action="{{ url('store-events') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group w-full md:w-6/12 px-2 mt-4">
                                    <label for="initiative-field" class="text-gray-700">Initiative</label>
                                    <input 
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                        id="initiative-field" 
                                        name="initiative-field"
                                        value="{{ old('initiative-field') }}"
                                    >
                                    @error('initiative-field')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="text-gray-700 w-full md:w-6/12 px-2 mt-4">
                                    <label for="status-dropdown">Status</label>
                                    <select 
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                        id="status-dropdown"
                                        name="status-dropdown"
                                    >
                                        <option value="">Select Status</option>
                                        <option value="2" {{ old('status-dropdown') == '2' ? 'selected' : '' }}>Live</option>
                                        <option value="1" {{ old('status-dropdown') == '1' ? 'selected' : '' }}>Upcoming</option>
                                        <option value="3" {{ old('status-dropdown') == '3' ? 'selected' : '' }}>Done</option>
                                    </select>
                                    @error('status-dropdown')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group w-full px-2 mt-4">
                                    <label for="title-field" class="text-gray-700">Title</label>
                                    <input 
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                    id="title-field"
                                    name="title-field"
                                    value="{{ old('title-field') }}"
                                    >
                                    </input>
                                    @error('title-field')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group w-full px-2 mt-4">
                                    <label for="description-field" class="text-gray-700">Description</label>
                                    <textarea
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 resize-y"
                                        id="description-field"
                                        name="description-field"
                                    >{{ old('description-field') }}</textarea>
                                    @error('description-field')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                
                                <div class="form-group w-full md:w-6/12 px-2 mt-4">
                                    <label for="start-field" class="text-gray-700">Start Date</label>
                                    <input
                                        type="datetime-local"
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="start-field"
                                        name="start-field"
                                        value="{{ old('start-field') }}"
                                    >
                                    @error('start-field')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group w-full md:w-6/12 px-2 mt-4">
                                    <label for="end-field" class="text-gray-700">End Date</label>
                                    <input
                                        type="datetime-local"
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="end-field"
                                        name="end-field"
                                        value="{{ old('end-field') }}"
                                    >
                                    @error('end-field')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                

                                <div class="form-group w-full md:w-6/12 px-2 mt-4">
                                    <label for="url-field" class="text-gray-700">Read More URL</label>
                                    <input
                                        type="text"
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="url-field"
                                        name="url-field"
                                        value="{{ old('url-field') }}"
                                    >
                                    @error('url-field')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group w-full md:w-6/12 px-2 mt-4">
                                    <label for="poster" class="text-gray-700">Poster</label>
                                    <input type="file" id="poster" name="poster"
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        
                                    >
                                    @error('poster')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group w-full md:w-6/12 px-2 mt-4">
                                    <label for="type-field" class="text-gray-700">Type</label>
                                    <select 
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                        id="type-field"
                                        name="type-field"
                                    >
                                        <option value="">Select Status</option>
                                        <option value="1" {{ old('type-field') == '1' ? 'selected' : '' }}>Online</option>
                                        <option value="2" {{ old('type-field') == '2' ? 'selected' : '' }}>Offline</option>
                                    </select>
                                    @error('type-field')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group w-full md:w-6/12 px-2 mt-4">
                                    <label for="passcode-field" class="text-gray-700">Passcode</label>
                                    <input type="password" id="passcode-field" name="passcode-field"
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        
                                    >
                                    @error('passcode-field')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                

                                <div class="w-full flex justify-end mt-5 px-2">
                                    <button value="submit" class="px-4 py-2 bg-red-500 font-bold text-white hover:bg-red-800 rounded-sm">
                                        submit
                                    </button>

                                </div>
                                </div>
                              </form>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End Section -->



@stop

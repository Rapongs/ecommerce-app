<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="flex h-full items-center">
      <main class="w-full max-w-3xl mx-auto p-6">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
          <div class="p-4 sm:p-7">
            <div class="text-center">
              <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign up</h1>
              <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                Already have an account?
                <a wire:navigate class="text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/login">
                  Sign in here
                </a>
              </p>
            </div>
            <hr class="my-5 border-slate-300">
            <!-- Form -->
            <form wire:submit.prevent="save">
              <div class="grid gap-y-4">
                  <!-- Row 1 Form Group -->
                  <div class="flex justify-around w-full">
                    <div class="w-1/2 mr-2">
                      <label for="first_name" class="block text-sm mb-2 dark:text-white">First Name</label>
                      <div class="relative">
                        <input type="text" id="first_name" wire:model="first_name" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" aria-describedby="email-error">
                        @error('first_name')
                        <div class=" absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                          <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                          </svg>
                        </div>
                        @enderror
                      </div>
                      @error('first_name')
                      <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                      @enderror
                    </div>
                    
                    <div class="w-1/2">
                      <label for="last_name" class="block text-sm mb-2 dark:text-white">Last Name</label>
                      <div class="relative">
                        <input type="text" id="last_name" wire:model="last_name" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" aria-describedby="email-error">
                        @error('last_name')
                        <div class=" absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                          <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                          </svg>
                        </div>
                        @enderror
                      </div>
                      @error('last_name')
                      <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                      @enderror
                    </div>
                </div>
                <!-- End Row 1 Form Group -->
  
                <!-- Row 2 Form Group -->
                <div class="flex justify-around w-full">
                  <div class="w-1/2 mr-2">
                    <label for="email" class="block text-sm mb-2 dark:text-white">Email</label>
                    <div class="relative">
                      <input type="email" id="email" wire:model="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" aria-describedby="email-error">
                      @error('email')    
                      <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                      </div>
                      @enderror
                    </div>
                      @error('email')
                      <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                      @enderror
                  </div>
                  <div class="w-1/2">
                    <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                    <div class="relative">
                      <input type="password" id="password" wire:model="password" class="py-3 border px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" aria-describedby="password-error">
                      @error('password')
                      <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                      </div>
                      @enderror
                    </div>
                      @error('password')
                      <p class="text-xs text-red-600 mt-2" id="password-error">{{$message}}</p>
                      @enderror
                  </div>
                </div>
                <!-- End Row 2 Form Group -->

                {{-- Row 3 From Group --}}
                <div class="flex gap-x-10">
                  <div>
                    <label class="block text-sm mb-2" for="birth_date">Birth Date</label>
                    <input class="py-3 border px-4 block rounded-lg text-sm" type="date" id="birth_date" wire:model="birth_date" aria-describedby="password-error">
                    @error('birth_date')
                    <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                    @enderror
                  </div>
                  <div>
                    <label class="block text-sm mb-2" for="gender">Gender</label>
                    <div class="flex gap-x-2 mt-4">
                      <input class="py-3 border px-4 block rounded-lg text-sm" type="radio" id="gender" wire:model="gender" value="pria" aria-describedby="password-error">
                      <label class="block" for="gender">Laki-laki</label>
                      <input class="py-3 border px-4 block rounded-lg text-sm" type="radio" id="gender" wire:model="gender" value="wanita" aria-describedby="password-error">
                      <label class="block" for="gender">Perempuan</labelc>
                    </div>
                    @error('gender')
                    <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                {{-- End Row 3 From Group --}}

                {{-- Row 4 From Group --}}
                <div class="flex justify-around">
                  <div class="w-1/2 mr-2">
                    <label for="province" class="block text-sm mb-2 dark:text-white">Province</label>
                    <div class="relative">
                      <input type="text" id="province" wire:model="province" class="py-3 px-4 block w-full border rounded-lg" aria-describedby="email-error">
                      @error('province')
                      <div class=" absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                      </div>
                      @enderror
                    </div>
                    @error('province')
                    <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="w-1/2">
                    <label for="city" class="block text-sm mb-2 dark:text-white">City</label>
                    <div class="relative">
                      <input type="text" id="city" wire:model="city" class="py-3 px-4 block w-full border rounded-lg" aria-describedby="email-error">
                      @error('city')
                      <div class=" absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                      </div>
                      @enderror
                    </div>
                    @error('city')
                    <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                {{-- End Row 4 From Group --}}

                <div>
                  <label class="block text-sm mb-2 dark:text-white" for="address">Address</label>
                  <textarea class="py-3 px-4 block w-full border rounded-lg" name="address" id="address" cols="30" rows="4" wire:model='address' aria-describedby="email-error"></textarea>
                    @error('address')
                    <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                    @enderror
                </div>

                <div>
                  <div class="w-1/2">
                    <label for="phone" class="block text-sm mb-2 dark:text-white">Phone</label>
                    <div class="relative">
                      <input type="text" id="phone" wire:model="phone" class="py-3 px-4 block w-full border rounded-lg" aria-describedby="email-error">
                      @error('phone')
                      <div class=" absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                      </div>
                      @enderror
                    </div>
                    @error('phone')
                    <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                    @enderror
                  </div>
                </div>

                <div class="w-full flex justify-center">
                  <button type="submit" class="w-1/3 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Sign up</button>
                </div>
                
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
    </div>
  </div>
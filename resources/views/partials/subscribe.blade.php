<div class="sans-serif bg-gray-100 flex w-full items-center min-h-screen">
    <div class="max-w-6xl mx-auto pt-4 pb-8 px-4 overflow-hidden w-full">
      <div x-data="{ loading: false, showAlertMessage: false, showSuccessMessage: false, name: '', email: '', errors: [] }"
        x-cloak>
        <div class="md:flex md:flex-wrap">
          <div class="md:w-1/3 md:mx-auto">
            <div class="rounded bg-white shadow p-6 border-t-8 border-blue-500">
              <h1 class="text-2xl text-gray-800 mb-1 font-bold leading-tight">Subscribe our Newsletter</h1>
              <p class="text-gray-600 mb-4 text-sm">Get latest news delivered to your inbox!</p>
  
              <div x-show="showAlertMessage" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 my-4"
                  role="alert">
                  <p>Please fix the error given below!</p>
                </div>
              </div>
  
              <div x-show="showSuccessMessage" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4"
                  role="success">
                  <p>Thank you for subscribing!</p>
                </div>
              </div>
  
              <form method="POST" x-on:submit.prevent="loading=true; 
                if (name == '' && email == '') {
                  errors = {
                    name: ['The name field is required'],
                    email: ['The email field is required']
                  }
  
                  loading = false;
                  showAlertMessage = true;
                  return;
                }
  
                if (name && email == '') {
                  errors = {
                    email: ['The email field is required']
                  }
  
                  loading = false;
                  showAlertMessage = true;
                  return;
                }
  
                if (name == '' && email) {
                  errors = {
                    name: ['The name field is required']
                  }
  
                  loading = false;
                  showAlertMessage = true;
                  return;
                }
  
                const expression = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
                              const validEmail = expression.test(String(email).toLowerCase())
  
                if (email != '' && ! validEmail) {
                  errors = {
                    email: ['Please enter a valid email address']
                  }
  
                  loading = false;
                  showAlertMessage = true;
                  return;
                }
                
                // Replace this with your own Sheety API
                fetch('https://v2-api.sheety.co/8ab38e8355f6f144fb93048354178f03/subscribersApi/subscribers', {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/json'
                  },
                  body: JSON.stringify({
                    subscriber: {
                      name: name,
                      email: email
                    }
                  })
                }).then(response => response.json())
                  .then(data => {
                    loading = false;
                    showAlertMessage = false;
                    showSuccessMessage = true;
                    name = '';
                    email = '';
                  });
              ">
  
                <div class="mb-4">
                  <label for="name" class="font-bold mb-1 block text-gray-700">Name</label>
                  <div class="relative">
                    <input id="name" x-model="name" x-on:keydown="delete errors['name']"
                      x-bind:class="{ 'border-red-500 text-red-500': errors['name'] }"
                      class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                      type="text" placeholder="Jane Doe">
  
                    <template x-if="errors['name']">
                      <span>
                        <svg class="w-6 h-6 absolute text-red-600 fill-current"
                          style="top: 10px; right: 12px" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24">
                          <path
                            d="M11.953,2C6.465,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.493,2,11.953,2z M13,17h-2v-2h2V17z M13,13h-2V7h2V13z" />
                        </svg>
                        <span class="text-red-600 mt-2 text-sm block"
                          x-text="errors['name']"></span>
                      </span>
                    </template>
                  </div>
  
                </div>
  
                <div class="mb-5">
                  <label for="email" class="font-bold mb-1 block text-gray-700">Email</label>
                  <div class="relative">
                    <input id="email" x-model="email" x-on:keydown="delete errors['email']"
                      x-bind:class="{ 'border-red-500 text-red-500': errors['email'] }"
                      class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                      type="text" placeholder="jane@example.com">
  
                    <template x-if="errors['email']">
                      <span>
                        <svg class="w-6 h-6 absolute text-red-600 fill-current"
                          style="top: 10px; right: 12px" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24">
                          <path
                            d="M11.953,2C6.465,2,2,6.486,2,12s4.486,10,10,10s10-4.486,10-10S17.493,2,11.953,2z M13,17h-2v-2h2V17z M13,13h-2V7h2V13z" />
                        </svg>
                        <span class="text-red-600 mt-2 text-sm block"
                          x-text="errors['email']"></span>
                      </span>
                    </template>
                  </div>
                </div>
  
                <button type="submit" 
                  class="bg-boja hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg w-full"
                  x-bind:disabled="loading == true">
                  <template x-if="loading == false">
                    <div>Subscribe Now!</div>
                  </template>
                  <template x-if="loading == true">
                    <div>Subscribing...</div>
                  </template>
                </button>
  
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
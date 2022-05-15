
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1"
                                   class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text"
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name"
                                   >
                        </div>
                      <div class="mb-4">
                            <label for="exampleFormControlInput2"
                                   class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 
                                text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="email"
                                placeholder="Enter Email" ></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2"
                                   class="block text-gray-700 text-sm font-bold mb-2">Mobile:</label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3
                                 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="exampleFormControlInput2" wire:model="mobile"
                                placeholder="Enter Mobile"></textarea>
                        </div>
                   

                        <div class="mb-4">
                        <label for="satut">Choose a satut:</label>
                          <select wire:model="statu">
                             <option value = "0">false</option>
                             <option value= "1">true</option>
                         </select>
                         </div> 


                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">





                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                    <button type="submit" wire:click.prevent="submit" 
                     class="btn btn-primary">Enregistrer</button>

                        <button type="button"
                                class="inline-flex justify-center w-full rounded-md 
                                border border-gray-300 px-4 py-2 bg-white text-base 
                                leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 
                                focus:outline-none focus:border-blue-300 focus:shadow-outline-blue
                                 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Close
                        </button>
                    </span>
                </div>
            </form>

<x-app-layout>
    <div class="bg-white dark:bg-gray-800 relative overflow-x-auto shadow-md sm:rounded-lg">
        <form class="mx-2 my-2">
            <h4 class="text-2xl font-bold dark:text-white mx-auto">Patient Details</h4>
            <div class="grid md:grid-cols-12 md:gap-4 ">
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="req_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">REQUEST NO</label>
                    <input type="text" id="req_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="relative z-0 mb-5 group col-span-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PATIENT NAME</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>                
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="or_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">OR NO</label>
                    <input type="text" id="or_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
            </div>
            <div class="grid md:grid-cols-12 md:gap-4 ">
                <div class="relative z-0 mb-5 group col-span-2">
                    <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">AGE</label>
                    <input type="number" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="relative z-0 mb-5 group col-span-2">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GENDER</label>
                    <select id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected></option>
                        <option value="M">Male</option>
                        <option value="F">Femae</option>
                    </select>
                </div>
                <div class="relative z-0 mb-5 group col-span-8">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ADDRESS</label>
                    <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
            </div>
            <div class="grid md:grid-cols-12 md:gap-4 ">
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">REQUESTING DOCTOR</label>
                    <input type="text" id="doctor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="dt_requested" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DATE & TIME REQUESTED</label>
                    <input type="datetime-local" id="dt_requested" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="dt_performed" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DATE & TIME PERFORMED</label>
                    <input type="datetime-local" id="dt_performed" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="dt_validated" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DATE & TIME VALIDATED</label>
                    <input type="datetime-local" id="dt_validated" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
            </div>
            <h4 class="text-2xl font-bold dark:text-white mx-auto">BLOOD TYPING</h4>
            <div class="grid md:grid-cols-12 md:gap-4 ">
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="bloodtype" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RESULT</label>
                </div>
                <div class="relative z-0 mb-5 group col-span-3">
                    <input type="text" id="bloodtype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="relative z-0 mb-5 group col-span-3">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SAVE</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
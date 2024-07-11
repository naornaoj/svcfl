<x-app-layout>
    <div class="bg-white dark:bg-gray-800 relative overflow-x-auto shadow-md sm:rounded-lg">
        <form class="mx-2 my-2">
            <h4 class="text-center text-2xl font-bold dark:text-white mx-auto">PATIENT DETAILS</h4>
            <div class="grid md:grid-cols-12 md:gap-4 ">
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="req_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">REQUEST NO</label>
                    <input type="text" id="req_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="relative z-0 mb-5 group col-span-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PATIENT NAME</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                </div>                
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="or_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">OR NO</label>
                    <input type="text" id="or_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                </div>
            </div>
            <div class="grid md:grid-cols-12 md:gap-4 ">
                <div class="relative z-0 mb-5 group col-span-2">
                    <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">AGE</label>
                    <input type="text" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                </div>
                <div class="relative z-0 mb-5 group col-span-2">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GENDER</label>
                    <input type="text" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                </div>
                <div class="relative z-0 mb-5 group col-span-8">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ADDRESS</label>
                    <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                </div>
            </div>
            <div class="grid md:grid-cols-12 md:gap-4 ">
                <div class="relative z-0 mb-5 group col-span-3">
                    <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">REQUESTING DOCTOR</label>
                    <input type="text" id="doctor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
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
            <h4 class="text-center text-2xl font-bold dark:text-white mx-auto">URINALYSIS</h4>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="border text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                        <th scope="col" class="px-6 py-3 border-x">METHOD:URINALYSIS UNCENTRIFUGED SPECIMEN</th>
                        <th scope="col" class="px-6 py-3 border-x">RESULT</th>
                        <th scope="col" class="px-6 py-3 border-x">REFERENCE</th>
                        <th scope="col" class="px-6 py-3 border-x">UNIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 text-sm font-bold text-gray-900 whitespace-nowrap dark:text-white" colspan="4">Physical Characteristics</th>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Color</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Transparency</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">pH</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Specific Gravity</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 text-sm font-bold text-gray-900 whitespace-nowrap dark:text-white" colspan="4">Chemical Characteristics</th>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Protein</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Glucose</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 text-sm font-bold text-gray-900 whitespace-nowrap dark:text-white" colspan="4">Microscopic Findings</th>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Casts</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Crystals</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>  
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Amorphous</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr> 
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Micro Organism</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Others</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>  
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">W.B.C / hpf</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>  
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">R.B.C. / hpf</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>  
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Epithelial Cells</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>  
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Mucus Threads</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr>
                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 border-x">Bacteria</td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                            <td class="px-6 py-2 border-x"></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
            <h4 class="text-center text-2xl font-bold dark:text-white mx-auto">HEMOGLOBIN</h4>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="border text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                        <th scope="col" class="px-6 py-3 border-x">TEST</th>
                        <th scope="col" class="px-6 py-3 border-x">Result</th>
                        <th scope="col" class="px-6 py-3 border-x">Normal Values</th>
                        <th scope="col" class="px-6 py-3 border-x">Unit</th>
                        </tr>
                    </thead>
                    <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-2 border-x">HEMOGLOBIN</td>
                        <td class="px-6 py-2 border-x"></td>
                        <td class="px-6 py-2 border-x">M - 13.2 - 16.2, F - 12.0 - 15.2</td>
                        <td class="px-6 py-2 border-x">mg/dl</td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</x-app-layout>
<div id="updateUserModal" modal-center=""
    class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
            <h5 class="text-16">Update User</h5>
            <button data-modal-close="updateUserModal"
                class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                <i data-lucide="x" class="size-5"></i>
            </button>
        </div>
        <div class="p-4">
            <form id="updateUserForm" action="{{ route('user.update', ':id') }}" method="POST">
                @csrf
                @method('PUT')
                <!--ID-->
                <input type="hidden" name="id">

                <!--Name-->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 form-input w-full" required>
                </div>

                <!--Phone-->
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="mt-1 form-input w-full" required>
                </div>

                <!--Role-->
                <div class="mb-4">
                    <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                    <select name="role" id="role" class="mt-1 form-select w-full">
                        <option value="admin">Admin</option>
                        <option value="owner">Owner</option>
                        <option value="pegawai">Pegawai</option>
                    </select>
                </div>

                <!--Email-->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 form-input w-full" required>
                </div>

                <!--Password-->
                <div class="mb-4">
                    <label for="unhashed_password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="text" name="unhashed_password" id="unhashed_password" class="mt-1 form-input w-full" required>
                </div>

                <button type="submit" class="btn bg-custom-500 text-white w-full">Update</button>
            </form>
        </div>
    </div>
</div>

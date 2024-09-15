<div class="flex h-screen ">
    <!-- Sidebar -->
    <div class="flex flex-col p-3 bg-gray-800 text-white w-64	">
        <div class="space-y-3 fixed ">
            <div class="flex-1 ">
                <ul class="pt-2 pb-4 space-y-6 text-sm ">
                    <li class="rounded-sm">
                        <a href="/"
                            class="<?=urlIs('/') ? 'bg-gray-900 text-white ' : ''?>  flex items-center p-2 space-x-3 rounded-md hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3v18h18V3H3zm9 5h6v6h-6V8zm-8 0h6v6H4V8z" />
                            </svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="rounded-sm">
                        <a href="/students"
                            class=" <?=urlIs('/student') ? 'bg-gray-900 text-white ' : ''?> flex items-center p-2 space-x-3 rounded-md hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h8m-8 4h10m2-8V7a2 2 0 00-2-2H7a2 2 0 00-2 2v1a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H7z" />
                            </svg>
                            <span>Students</span>
                        </a>
                    </li>
                    <li class="rounded-sm">
                        <a href="/teacher"
                            class="<?=urlIs('/teacher') ? 'bg-gray-900 text-white ' : ''?> flex items-center p-2 space-x-3 rounded-md hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m-1 4v-4h3v6m0 0H9v2m4 0v-2h1" />
                    </svg>
                            <span>Teacher</span>
                        </a>
                    </li>
                    <li class="rounded-sm ">
                                            <a href="/" class=" <?=urlIs('/notice') ? 'bg-gray-900 text-white  ' : ''?> flex  items-center p-2 space-x-3 rounded-md hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 8a6 6 0 10-12 0 6 6 0 0012 0zM9 8V4a1 1 0 112 0v4a1 1 0 11-2 0zM9 12a1 1 0 112 0 1 1 0 01-2 0z" clip-rule="evenodd" />
                    </svg>
                    
                            <span>Class</span>
                        </a>
                    </li>
                    <li class="rounded-sm">
                        <a href="/" class=" <?=urlIs('/course') ? 'bg-gray-900 text-white ' : ''?> flex items-center p-2 space-x-3 rounded-md hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11V9a4 4 0 00-4-4h0a4 4 0 00-4 4v2a4 4 0 004 4h0a4 4 0 004-4z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5v.01M18 8a6 6 0 00-6-6v0a6 6 0 00-6 6v3a6 6 0 006 6v0a6 6 0 006-6V8z" />
                            </svg>
                            <span>Course</span>
                        </a>
                    </li>
                    <li class="rounded-sm">
                        <a href="/" class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M3 6h18M3 14h18M3 18h18" />
                            </svg>
                            <span>Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
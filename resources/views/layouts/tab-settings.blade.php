<div class="border-b border-gray-200  md:ml-10  mt-[40px]">
    <ul class="flex flex-wrap  text-sm font-medium text-center text-gray-500 ">
        <li class="me-2">
            <a href="{{ route('site-settings.index') }}"
               class="inline-flex items-center justify-center p-4 border-b-2 rounded-t-lg group
               {{ request()->is('site-settings') ? 'text-blue-600 border-blue-600 ' : 'border-transparent hover:text-gray-600 hover:border-gray-300 ' }}">
                <svg class="{{request()->is('site-settings') ? 'w-4 h-4 me-2 text-blue-600 group-hover:text-gray-500' : 'w-4 h-4 me-2 text-gray-600 group-hover:text-gray-500' }}"
                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                </svg>General
            </a>
        </li>

        <li class="me-2">
            <a href="{{ route('app-overview.index') }}" class="inline-flex items-center justify-center p-4 border-b-2 rounded-t-lg group
            {{ request()->is('site-settings/app-overview') ? 'text-blue-600 border-blue-600 ' : 'border-transparent hover:text-gray-600 hover:border-gray-300 ' }}" aria-current="page">
                <svg  class="{{request()->is('site-settings/app-overview') ? 'w-4 h-4 me-2 text-blue-600 group-hover:text-gray-500' : 'w-4 h-4 me-2 text-gray-600 group-hover:text-gray-500' }}"  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                </svg>App Overview
            </a>
        </li>

        <li class="me-2">
            <a href="{{ route('external-links.index') }}" class="inline-flex items-center justify-center p-4 border-b-2 rounded-t-lg group
            {{ request()->is('site-settings/external-links') ? 'text-blue-600 border-blue-600 ' : 'border-transparent hover:text-gray-600 hover:border-gray-300 ' }}" >
                <svg class="{{request()->is('site-settings/external-links') ? 'w-4 h-4 me-2 text-blue-600 group-hover:text-gray-500' : 'w-4 h-4 me-2 text-gray-600 group-hover:text-gray-500' }}"
                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 11.424V1a1 1 0 1 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.228 3.228 0 0 0 0-6.152ZM19.25 14.5A3.243 3.243 0 0 0 17 11.424V1a1 1 0 0 0-2 0v10.424a3.227 3.227 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.243 3.243 0 0 0 2.25-3.076Zm-6-9A3.243 3.243 0 0 0 11 2.424V1a1 1 0 0 0-2 0v1.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0V8.576A3.243 3.243 0 0 0 13.25 5.5Z"/>
                </svg>External Links
            </a>
        </li>

        <li class="me-2">
            <a href="{{ route('inquiry-recipients.index') }}" class="inline-flex items-center justify-center p-4 border-b-2 rounded-t-lg group
            {{ request()->is('site-settings/inquiry-recipients') ? 'text-blue-600 border-blue-600 ' : 'border-transparent hover:text-gray-600 hover:border-gray-300 ' }}" >
            <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
            </svg>Inquiry Recipient
            </a>
        </li>

    </ul>
</div>
{{ $slot }}

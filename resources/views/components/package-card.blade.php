@props(['id' => 1, 'packageType' => 'tour', 'img', 'i'])

<div class="-space-y-5 group overflow-hidden isolate">
    <div class="cursor-pointer relative -z-10">
        <span
            class="absolute capitalize left-2 top-2 py-1 px-2.5 rounded-sm w-fit font-inter font-bold shadow-lg text-md backdrop-blur-[10px] backdrop-saturate-[165%] bg-[rgba(215,215,215,0.2)] border border-[rgba(255,255,255,0.125)] z-10">
            {{ in_array($packageType, ['tour', 'activity']) ? $packageType : '' }}</span>
        <img class="-z-10 w-full max-h-50 object-cover object-center transition group-hover:scale-105"
            src="{{ $img }}" alt="">
    </div>
    <div class="bg-gray-200 p-5 rounded-t-xl z-10">
        <h4 class="font-roboto text-xl font-semibold">Tour Package Title</h4>
        <p class="font-inter text-md italic text-gray-600">Kintamani, Bali</p>

        <p class="font-inter text-md text-gray-500 my-4 max-w-xs">
            At Explore Vista Bali, we're passionate about helping travellers discover the...
        </p>

        <div class="flex flex-wrap justify-start gap-4 font-inter [&_p]:font-semibold mb-4">
            <div class="flex items-center gap-0.5 sm:gap-2 whitespace-nowrap">
                <svg class="size-5 text-cst-yellow-600" viewBox="0 0 14 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.2725 2.5425L13.3375 1.4775C13.015 1.095 12.6625 0.735 12.28 0.42L11.215 1.485C10.0525 0.555 8.59 0 7 0C3.2725 0 0.25 3.0225 0.25 6.75C0.25 10.4775 3.265 13.5 7 13.5C10.735 13.5 13.75 10.4775 13.75 6.75C13.75 5.16 13.195 3.6975 12.2725 2.5425ZM7.75 7.5H6.25V3H7.75V7.5Z"
                        fill="currentColor" />
                </svg>
                <p class="text-md">09:00 AM</p>
            </div>
            <div class="flex items-center gap-0.5 sm:gap-2 whitespace-nowrap">
                <svg class="size-5 text-cst-yellow-600" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.00002 0.666687C4.40002 0.666687 0.666687 4.40002 0.666687 9.00002C0.666687 13.6 4.40002 17.3334 9.00002 17.3334C13.6 17.3334 17.3334 13.6 17.3334 9.00002C17.3334 4.40002 13.6 0.666687 9.00002 0.666687ZM10.175 14.075V15.6667H7.95002V14.0584C6.52502 13.7584 5.31669 12.8417 5.22502 11.225H6.85835C6.94169 12.1 7.54169 12.7834 9.06669 12.7834C10.7 12.7834 11.0667 11.9667 11.0667 11.4584C11.0667 10.7667 10.7 10.1167 8.84169 9.67502C6.77502 9.17502 5.35835 8.32502 5.35835 6.61669C5.35835 5.18335 6.51669 4.25002 7.95002 3.94169V2.33335H10.175V3.95835C11.725 4.33335 12.5 5.50835 12.55 6.78335H10.9167C10.875 5.85835 10.3834 5.22502 9.06669 5.22502C7.81669 5.22502 7.06669 5.79169 7.06669 6.59169C7.06669 7.29169 7.60835 7.75002 9.29169 8.18335C10.975 8.61669 12.775 9.34169 12.775 11.4417C12.7667 12.9667 11.625 13.8 10.175 14.075Z"
                        fill="currentColor" />
                </svg>
                <p class="text-md">$50</p>
            </div>
        </div>

        <x-wave-button href="{{ route('services.package-detail', ['id' => $id, 'type' => $packageType]) }}"
            firstTextClasses="text-cst-yellow-400 font-inter font-semibold"
            secondTextClasses="text-cst-yellow-400 font-playfair font-bold italic"
            class="text-lg w-full py-2 text-center bg-cst-green-400 rounded-sm">
            Book Tour <span class="ml-4">&rightarrow;</span>
        </x-wave-button>
    </div>
</div>

<button type="button"
    x-on:click="editor().chain().focus().toggleUnderline().run()"
    class="p-2"
    :class="{ 'active': isActive('underline', updatedAt) }"
    x-tooltip="'Underline'">
    <svg xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        aria-hidden="true"
        role="img"
        class="w-5 h-5 iconify iconify--ic"
        width="24"
        height="24"
        preserveAspectRatio="xMidYMid meet"
        viewBox="0 0 24 24">
        <path fill="currentColor"
            d="M12 17c3.31 0 6-2.69 6-6V3h-2.5v8c0 1.93-1.57 3.5-3.5 3.5S8.5 12.93 8.5 11V3H6v8c0 3.31 2.69 6 6 6zm-7 2v2h14v-2H5z">
        </path>
    </svg>
    <span class="sr-only">Underline</span>
</button>

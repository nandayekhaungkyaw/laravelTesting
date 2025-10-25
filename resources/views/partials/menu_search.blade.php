<div class=" flex  md:flex-row justify-between ">

<div class="md:flex-1 min-w-[300px] mb-4 md:mb-0 me-4">
   <form action="{{ route('menu') }}" method="GET" class="max-w-md relative" id="search-form">
    <label for="default-search"
           class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>

    <div class="relative">
        <!-- Search Icon -->
     <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">

        </div>

        <!-- Input -->
        <input
            name="query"
            value="{{ request('query') }}"
            type="search"
            id="default-search"
            class="block w-full p-4 ps-10 pr-10 text-sm text-gray-900 border border-gray-300 rounded-lg
                   bg-gray-50 focus:ring-blue-500 focus:border-blue-500
                  
                  "
            placeholder="Search ..."
        >

        <!-- Clear (×) icon -->
        <button type="button" id="clear-btn"
                class="hidden absolute end-2.5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600
                      ">
            <!-- X icon -->
            <img src="{{asset('images/loading.gif')}}" class=" size-6 mx-auto" alt="">
        </button>
    </div>
</form>


</div>


</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input   = document.getElementById('default-search');
    const form    = document.getElementById('search-form');
    const clearBtn= document.getElementById('clear-btn');

    // --- Debounce helper ---
    function debounce(fn, delay) {
        let timer;
        return function (...args) {
            clearTimeout(timer);
            timer = setTimeout(() => fn.apply(this, args), delay);
        };
    }

    // --- Auto submit after 500ms ---
    const debouncedSubmit = debounce(() => {
        form.submit();
    }, 500);

    input.addEventListener('input', () => {
        // show/hide clear icon
        if (input.value.trim() !== '') {
            clearBtn.classList.remove('hidden');
        } else {
            clearBtn.classList.add('hidden');
        }
        debouncedSubmit();
    });

    // --- Clear input ---
    clearBtn.addEventListener('click', () => {
        input.value = '';
        clearBtn.classList.add('hidden');
        form.submit(); // optional: refresh results immediately
    });
});
</script>



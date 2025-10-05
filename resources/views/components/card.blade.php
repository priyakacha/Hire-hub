<div
    {{ $attributes->merge([
        'class' => 'bg-indigo-200 h-full p-6 rounded-2xl border-1 border-black 
                         flex flex-col relative overflow-hidden shadow-md 
                         hover:shadow-2xl hover:border-indigo-500 transition-all duration-300',
    ]) }}>
    {{ $slot }}


</div>

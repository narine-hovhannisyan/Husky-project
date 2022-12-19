<button {{ $attributes->merge(['type' => 'submit', 'class' => '
bg-fuchsia-800 text-xs text-white border-400 px-20 py-2 form-control
' ,'style'=>'background-color: #B14EE0; border-radius: 1rem; color:white' ]) }}>
    {{ $slot }}
</button>


<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 sidebar" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{ route('customers.index') }}">
               <span class="ms-3">Clientes</span>
            </a>
         </li>
         <li>
            <a href="{{ route('accounts.index') }}">
               <span class="flex-1 ms-3 whitespace-nowrap">Cuentas</span>
            </a>
         </li>
         <li>
            <a href="{{ route('employes.index') }}">
               <span class="flex-1 ms-3 whitespace-nowrap">Empleados</span>
            </a>
         </li>
        <li>
            <a href="{{ route('branches.index') }}">
               <span class="flex-1 ms-3 whitespace-nowrap">Sucursales</span>
            </a>
         </li>
         <li>
            <a href="{{ route('transactions.index') }}">
               <span class="flex-1 ms-3 whitespace-nowrap">Trsansacciones</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<header>
  <nav>
    <ul style="display:inline-flex;">
      <li class="mr-2">
        <a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'active' : ''}} text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
      </li>
      <li class="mr-2">
        <a href="{{route('courses.index')}}" class="{{request()->routeIs('courses.*') ? 'active' : ''}} text-sm text-gray-700 dark:text-gray-500 underline">Cursos</a>
      </li>
      <li><a href="{{route('us')}}" class="{{request()->routeIs('us') ? 'active' : ''}} text-sm text-gray-700 dark:text-gray-500 underline">Sobre Nosotros</a></li>
    </ul>
  </nav>
</header>
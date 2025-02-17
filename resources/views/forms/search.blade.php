<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
  <label>
    <span class="sr-only">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <input
      type="search"
      placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
    >
  </label>

  <button>
    <svg width="17.023438" height="17.023682" viewBox="0 0 17.0234 17.0237" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs/>
      <path id="Vector" d="M16.76 15.31L12.9 11.45C13.83 10.21 14.33 8.71 14.33 7.16C14.33 3.21 11.11 0 7.16 0C3.21 0 0 3.21 0 7.16C0 11.11 3.21 14.33 7.16 14.33C8.71 14.33 10.21 13.83 11.45 12.9L15.31 16.76C15.51 16.93 15.76 17.03 16.02 17.02C16.28 17.01 16.53 16.9 16.72 16.72C16.9 16.53 17.01 16.28 17.02 16.02C17.03 15.76 16.93 15.51 16.76 15.31ZM2.04 7.16C2.04 6.15 2.34 5.16 2.91 4.32C3.47 3.48 4.27 2.82 5.2 2.43C6.14 2.04 7.17 1.94 8.16 2.14C9.15 2.34 10.06 2.83 10.78 3.54C11.5 4.26 11.98 5.17 12.18 6.16C12.38 7.16 12.28 8.18 11.89 9.12C11.5 10.06 10.85 10.85 10.01 11.42C9.16 11.98 8.17 12.28 7.16 12.28C5.8 12.28 4.5 11.74 3.54 10.78C2.58 9.82 2.04 8.52 2.04 7.16Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
    </svg>
    
    {{ _x('', 'submit button', 'sage') }}
  </button>
</form>

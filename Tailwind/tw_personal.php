<body class="flex h-full bg-zinc-50 dark:bg-black">
<script>!function () {
        try {
            var d = document.documentElement, c = d.classList;
            c.remove('light', 'dark');
            var e = localStorage.getItem('theme');
            if ('system' === e || (!e && true)) {
                var t = '(prefers-color-scheme: dark)', m = window.matchMedia(t);
                if (m.media !== t || m.matches) {
                    d.style.colorScheme = 'dark';
                    c.add('dark')
                } else {
                    d.style.colorScheme = 'light';
                    c.add('light')
                }
            } else if (e) {
                c.add(e || '')
            }
            if (e === 'light' || e === 'dark') d.style.colorScheme = e
        } catch (e) {
        }
    }()</script>
<div class="flex w-full">
    <div class="fixed inset-0 flex justify-center sm:px-8">
        <div class="flex w-full max-w-7xl lg:px-8">
            <div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div>
        </div>
    </div>
    <div class="relative flex w-full flex-col">
        <header class="pointer-events-none relative z-50 flex flex-none flex-col"
                style="height:var(--header-height);margin-bottom:var(--header-mb)">
            <div class="order-last mt-[calc(theme(spacing.16)-theme(spacing.3))]"></div>
            <div class="sm:px-8 top-0 order-last -mb-3 pt-3" style="position:var(--header-position)">
                <div class="mx-auto w-full max-w-7xl lg:px-8">
                    <div class="relative px-4 sm:px-8 lg:px-12">
                        <div class="mx-auto max-w-2xl lg:max-w-5xl">
                            <div class="top-[var(--avatar-top,theme(spacing.3))] w-full"
                                 style="position:var(--header-inner-position)">
                                <div class="relative">
                                    <div class="absolute left-0 top-3 origin-left transition-opacity h-10 w-10 rounded-full bg-white/90 p-0.5 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:ring-white/10"
                                         style="opacity:var(--avatar-border-opacity, 0);transform:var(--avatar-border-transform)"></div>
                                    <a aria-label="Home" class="block h-16 w-16 origin-left pointer-events-auto"
                                       style="transform:var(--avatar-image-transform)" href="/"><img alt=""
                                                                                                     fetchpriority="high"
                                                                                                     width="512"
                                                                                                     height="512"
                                                                                                     decoding="async"
                                                                                                     data-nimg="1"
                                                                                                     class="rounded-full bg-zinc-100 object-cover dark:bg-zinc-800 h-16 w-16"
                                                                                                     style="color:transparent"
                                                                                                     sizes="4rem"

                                                                                                     src="https://sun1-14.userapi.com/s/v1/if1/o6FAcdF43yS5-KL3gkqRzUVJ7Y_HgkXFx1yU1sI37x8WWowrLwx-H4iqqzWWp12g5jhSSeqz.jpg?size=200x200&quality=96&crop=10,7,1481,1481&ava=1"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-0 z-10 h-16 pt-6" style="position:var(--header-position)">
                <div class="sm:px-8 top-[var(--header-top,theme(spacing.6))] w-full"
                     style="position:var(--header-inner-position)">
                    <div class="mx-auto w-full max-w-7xl lg:px-8">
                        <div class="relative px-4 sm:px-8 lg:px-12">
                            <div class="mx-auto max-w-2xl lg:max-w-5xl">
                                <div class="relative flex gap-4">
                                    <div class="flex flex-1"></div>
                                    <div class="flex flex-1 justify-end md:justify-center">
                                        <div class="pointer-events-auto md:hidden" data-headlessui-state="">
                                            <button class="group flex items-center rounded-full bg-white/90 px-4 py-2 text-sm font-medium text-zinc-800 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 dark:hover:ring-white/20"
                                                    type="button" aria-expanded="false" data-headlessui-state=""
                                                    id="headlessui-popover-button-:R2miqla:">Menu
                                                <svg viewBox="0 0 8 6" aria-hidden="true"
                                                     class="ml-3 h-auto w-2 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400">
                                                    <path d="M1.75 1.75 4 4.25l2.25-2.5" fill="none" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none"></div>
                                        <nav class="pointer-events-auto hidden md:block">
                                            <ul class="flex rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10">
                                                <li>
                                                    <a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
                                                       href="/about">About</a></li>
                                                <li>
                                                    <a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
                                                       href="/articles">Articles</a></li>
                                                <li>
                                                    <a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
                                                       href="/projects">Projects</a></li>
                                                <li>
                                                    <a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
                                                       href="/speaking">Speaking</a></li>
                                                <li>
                                                    <a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
                                                       href="/uses">Uses</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="flex justify-end md:flex-1">
                                        <div class="pointer-events-auto">
                                            <button type="button" aria-label="Switch to light theme"
                                                    class="group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20">
                                                <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                                     stroke-linejoin="round" aria-hidden="true"
                                                     class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden [@media(prefers-color-scheme:dark)]:fill-teal-50 [@media(prefers-color-scheme:dark)]:stroke-teal-500 [@media(prefers-color-scheme:dark)]:group-hover:fill-teal-50 [@media(prefers-color-scheme:dark)]:group-hover:stroke-teal-600">
                                                    <path d="M8 12.25A4.25 4.25 0 0 1 12.25 8v0a4.25 4.25 0 0 1 4.25 4.25v0a4.25 4.25 0 0 1-4.25 4.25v0A4.25 4.25 0 0 1 8 12.25v0Z"></path>
                                                    <path d="M12.25 3v1.5M21.5 12.25H20M18.791 18.791l-1.06-1.06M18.791 5.709l-1.06 1.06M12.25 20v1.5M4.5 12.25H3M6.77 6.77 5.709 5.709M6.77 17.73l-1.061 1.061"
                                                          fill="none"></path>
                                                </svg>
                                                <svg viewBox="0 0 24 24" aria-hidden="true"
                                                     class="hidden h-6 w-6 fill-zinc-700 stroke-zinc-500 transition dark:block [@media(prefers-color-scheme:dark)]:group-hover:stroke-zinc-400 [@media_not_(prefers-color-scheme:dark)]:fill-teal-400/10 [@media_not_(prefers-color-scheme:dark)]:stroke-teal-500">
                                                    <path d="M17.25 16.22a6.937 6.937 0 0 1-9.47-9.47 7.451 7.451 0 1 0 9.47 9.47ZM12.75 7C17 7 17 2.75 17 2.75S17 7 21.25 7C17 7 17 11.25 17 11.25S17 7 12.75 7Z"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="flex-none" style="height:var(--content-offset)"></div>
        <main class="flex-auto">
            <div class="sm:px-8 mt-9">
                <div class="mx-auto w-full max-w-7xl lg:px-8">
                    <div class="relative px-4 sm:px-8 lg:px-12">
                        <div class="mx-auto max-w-2xl lg:max-w-5xl">
                            <div class="max-w-2xl"><h1
                                        class="text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl">
                                    Software designer, founder, and amateur astronaut.</h1>
                                <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">I’m Spencer, a software
                                    designer and entrepreneur based in New York City. I’m the founder and CEO of
                                    Planetaria, where we develop technologies that empower regular people to explore
                                    space on their own terms.</p>
                                <div class="mt-6 flex gap-6"><a class="group -m-1 p-1" aria-label="Follow on Twitter"
                                                                href="https://twitter.com">
                                        <svg viewBox="0 0 24 24" aria-hidden="true"
                                             class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                            <path d="M20.055 7.983c.011.174.011.347.011.523 0 5.338-3.92 11.494-11.09 11.494v-.003A10.755 10.755 0 0 1 3 18.186c.308.038.618.057.928.058a7.655 7.655 0 0 0 4.841-1.733c-1.668-.032-3.13-1.16-3.642-2.805a3.753 3.753 0 0 0 1.76-.07C5.07 13.256 3.76 11.6 3.76 9.676v-.05a3.77 3.77 0 0 0 1.77.505C3.816 8.945 3.288 6.583 4.322 4.737c1.98 2.524 4.9 4.058 8.034 4.22a4.137 4.137 0 0 1 1.128-3.86A3.807 3.807 0 0 1 19 5.274a7.657 7.657 0 0 0 2.475-.98c-.29.934-.9 1.729-1.713 2.233A7.54 7.54 0 0 0 22 5.89a8.084 8.084 0 0 1-1.945 2.093Z"></path>
                                        </svg>
                                    </a><a class="group -m-1 p-1" aria-label="Follow on Instagram"
                                           href="https://instagram.com">
                                        <svg viewBox="0 0 24 24" aria-hidden="true"
                                             class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                            <path d="M12 3c-2.444 0-2.75.01-3.71.054-.959.044-1.613.196-2.185.418A4.412 4.412 0 0 0 4.51 4.511c-.5.5-.809 1.002-1.039 1.594-.222.572-.374 1.226-.418 2.184C3.01 9.25 3 9.556 3 12s.01 2.75.054 3.71c.044.959.196 1.613.418 2.185.23.592.538 1.094 1.039 1.595.5.5 1.002.808 1.594 1.038.572.222 1.226.374 2.184.418C9.25 20.99 9.556 21 12 21s2.75-.01 3.71-.054c.959-.044 1.613-.196 2.185-.419a4.412 4.412 0 0 0 1.595-1.038c.5-.5.808-1.002 1.038-1.594.222-.572.374-1.226.418-2.184.044-.96.054-1.267.054-3.711s-.01-2.75-.054-3.71c-.044-.959-.196-1.613-.419-2.185A4.412 4.412 0 0 0 19.49 4.51c-.5-.5-1.002-.809-1.594-1.039-.572-.222-1.226-.374-2.184-.418C14.75 3.01 14.444 3 12 3Zm0 1.622c2.403 0 2.688.009 3.637.052.877.04 1.354.187 1.67.31.421.163.72.358 1.036.673.315.315.51.615.673 1.035.123.317.27.794.31 1.671.043.95.052 1.234.052 3.637s-.009 2.688-.052 3.637c-.04.877-.187 1.354-.31 1.67-.163.421-.358.72-.673 1.036a2.79 2.79 0 0 1-1.035.673c-.317.123-.794.27-1.671.31-.95.043-1.234.052-3.637.052s-2.688-.009-3.637-.052c-.877-.04-1.354-.187-1.67-.31a2.789 2.789 0 0 1-1.036-.673 2.79 2.79 0 0 1-.673-1.035c-.123-.317-.27-.794-.31-1.671-.043-.95-.052-1.234-.052-3.637s.009-2.688.052-3.637c.04-.877.187-1.354.31-1.67.163-.421.358-.72.673-1.036.315-.315.615-.51 1.035-.673.317-.123.794-.27 1.671-.31.95-.043 1.234-.052 3.637-.052Z"></path>
                                            <path d="M12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm0-7.622a4.622 4.622 0 1 0 0 9.244 4.622 4.622 0 0 0 0-9.244Zm5.884-.182a1.08 1.08 0 1 1-2.16 0 1.08 1.08 0 0 1 2.16 0Z"></path>
                                        </svg>
                                    </a><a class="group -m-1 p-1" aria-label="Follow on GitHub"
                                           href="https://github.com">
                                        <svg viewBox="0 0 24 24" aria-hidden="true"
                                             class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M12 2C6.475 2 2 6.588 2 12.253c0 4.537 2.862 8.369 6.838 9.727.5.09.687-.218.687-.487 0-.243-.013-1.05-.013-1.91C7 20.059 6.35 18.957 6.15 18.38c-.113-.295-.6-1.205-1.025-1.448-.35-.192-.85-.667-.013-.68.788-.012 1.35.744 1.538 1.051.9 1.551 2.338 1.116 2.912.846.088-.666.35-1.115.638-1.371-2.225-.256-4.55-1.14-4.55-5.062 0-1.115.387-2.038 1.025-2.756-.1-.256-.45-1.307.1-2.717 0 0 .837-.269 2.75 1.051.8-.23 1.65-.346 2.5-.346.85 0 1.7.115 2.5.346 1.912-1.333 2.75-1.05 2.75-1.05.55 1.409.2 2.46.1 2.716.637.718 1.025 1.628 1.025 2.756 0 3.934-2.337 4.806-4.562 5.062.362.32.675.936.675 1.897 0 1.371-.013 2.473-.013 2.82 0 .268.188.589.688.486a10.039 10.039 0 0 0 4.932-3.74A10.447 10.447 0 0 0 22 12.253C22 6.588 17.525 2 12 2Z"></path>
                                        </svg>
                                    </a><a class="group -m-1 p-1" aria-label="Follow on LinkedIn"
                                           href="https://linkedin.com">
                                        <svg viewBox="0 0 24 24" aria-hidden="true"
                                             class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                            <path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 01-1.548-1.549 1.548 1.548 0 111.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z"></path>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-16 sm:mt-20">
                <div class="-my-4 flex justify-center gap-5 overflow-hidden py-4 sm:gap-8">
                    <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl rotate-2">
                        <img alt="" loading="lazy" width="3744" height="5616" decoding="async" data-nimg="1"
                             class="absolute inset-0 h-full w-full object-cover" style="color:transparent"
                             sizes="(min-width: 640px) 18rem, 11rem"
                             srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=3840&amp;q=75 3840w"
                             src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-1.c5d2141c.jpg&amp;w=3840&amp;q=75">
                    </div>
                    <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl -rotate-2">
                        <img alt="" loading="lazy" width="3936" height="2624" decoding="async" data-nimg="1"
                             class="absolute inset-0 h-full w-full object-cover" style="color:transparent"
                             sizes="(min-width: 640px) 18rem, 11rem"
                             srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=3840&amp;q=75 3840w"
                             src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-2.3c6c01cf.jpg&amp;w=3840&amp;q=75">
                    </div>
                    <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl rotate-2">
                        <img alt="" loading="lazy" width="5760" height="3840" decoding="async" data-nimg="1"
                             class="absolute inset-0 h-full w-full object-cover" style="color:transparent"
                             sizes="(min-width: 640px) 18rem, 11rem"
                             srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=3840&amp;q=75 3840w"
                             src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-3.454151b1.jpg&amp;w=3840&amp;q=75">
                    </div>
                    <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl rotate-2">
                        <img alt="" loading="lazy" width="2400" height="3000" decoding="async" data-nimg="1"
                             class="absolute inset-0 h-full w-full object-cover" style="color:transparent"
                             sizes="(min-width: 640px) 18rem, 11rem"
                             srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=3840&amp;q=75 3840w"
                             src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-4.5c6d0ed6.jpg&amp;w=3840&amp;q=75">
                    </div>
                    <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl -rotate-2">
                        <img alt="" loading="lazy" width="4240" height="2384" decoding="async" data-nimg="1"
                             class="absolute inset-0 h-full w-full object-cover" style="color:transparent"
                             sizes="(min-width: 640px) 18rem, 11rem"
                             srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=3840&amp;q=75 3840w"
                             src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimage-5.6c6f2784.jpg&amp;w=3840&amp;q=75">
                    </div>
                </div>
            </div>
            <div class="sm:px-8 mt-24 md:mt-28">
                <div class="mx-auto w-full max-w-7xl lg:px-8">
                    <div class="relative px-4 sm:px-8 lg:px-12">
                        <div class="mx-auto max-w-2xl lg:max-w-5xl">
                            <div class="mx-auto grid max-w-xl grid-cols-1 gap-y-20 lg:max-w-none lg:grid-cols-2">
                                <div class="flex flex-col gap-16">
                                    <article class="group relative flex flex-col items-start">
                                        <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                            <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 dark:bg-zinc-800/50 sm:-inset-x-6 sm:rounded-2xl"></div>
                                            <a href="/articles/crafting-a-design-system-for-a-multiplanetary-future"><span
                                                        class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span><span
                                                        class="relative z-10">Crafting a design system for a multiplanetary future</span></a>
                                        </h2>
                                        <time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5"
                                              datetime="2022-09-05"><span
                                                    class="absolute inset-y-0 left-0 flex items-center"
                                                    aria-hidden="true"><span
                                                        class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span></span>September
                                            5, 2022
                                        </time>
                                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">Most
                                            companies try to stay ahead of the curve when it comes to visual design, but
                                            for Planetaria we needed to create a brand that would still inspire us 100
                                            years from now when humanity has spread across our entire solar system.</p>
                                        <div aria-hidden="true"
                                             class="relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500">
                                            Read article
                                            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"
                                                 class="ml-1 h-4 w-4 stroke-current">
                                                <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </article>
                                    <article class="group relative flex flex-col items-start">
                                        <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                            <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 dark:bg-zinc-800/50 sm:-inset-x-6 sm:rounded-2xl"></div>
                                            <a href="/articles/introducing-animaginary"><span
                                                        class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span><span
                                                        class="relative z-10">Introducing Animaginary: High performance web animations</span></a>
                                        </h2>
                                        <time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5"
                                              datetime="2022-09-02"><span
                                                    class="absolute inset-y-0 left-0 flex items-center"
                                                    aria-hidden="true"><span
                                                        class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span></span>September
                                            2, 2022
                                        </time>
                                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">When
                                            you’re building a website for a company as ambitious as Planetaria, you need
                                            to make an impression. I wanted people to visit our website and see
                                            animations that looked more realistic than reality itself.</p>
                                        <div aria-hidden="true"
                                             class="relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500">
                                            Read article
                                            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"
                                                 class="ml-1 h-4 w-4 stroke-current">
                                                <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </article>
                                    <article class="group relative flex flex-col items-start">
                                        <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                            <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 dark:bg-zinc-800/50 sm:-inset-x-6 sm:rounded-2xl"></div>
                                            <a href="/articles/rewriting-the-cosmos-kernel-in-rust"><span
                                                        class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span><span
                                                        class="relative z-10">Rewriting the cosmOS kernel in Rust</span></a>
                                        </h2>
                                        <time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5"
                                              datetime="2022-07-14"><span
                                                    class="absolute inset-y-0 left-0 flex items-center"
                                                    aria-hidden="true"><span
                                                        class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span></span>July
                                            14, 2022
                                        </time>
                                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">When we
                                            released the first version of cosmOS last year, it was written in Go. Go is
                                            a wonderful programming language, but it’s been a while since I’ve seen an
                                            article on the front page of Hacker News about rewriting some important tool
                                            in Go and I see articles on there about rewriting things in Rust every
                                            single week.</p>
                                        <div aria-hidden="true"
                                             class="relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500">
                                            Read article
                                            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"
                                                 class="ml-1 h-4 w-4 stroke-current">
                                                <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </article>
                                </div>
                                <div class="space-y-10 lg:pl-16 xl:pl-24">
                                    <form class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40"
                                          action="/thank-you">
                                        <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
                                                 class="h-6 w-6 flex-none">
                                                <path d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
                                                      class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                                <path d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6"
                                                      class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                            </svg>
                                            <span class="ml-3">Stay up to date</span></h2>
                                        <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Get notified when I
                                            publish something new, and unsubscribe at any time.</p>
                                        <div class="mt-6 flex"><input type="email" placeholder="Email address"
                                                                      aria-label="Email address" required=""
                                                                      class="min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10 sm:text-sm">
                                            <button class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-800 font-semibold text-zinc-100 hover:bg-zinc-700 active:bg-zinc-800 active:text-zinc-100/70 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:active:bg-zinc-700 dark:active:text-zinc-100/70 ml-4 flex-none"
                                                    type="submit">Join
                                            </button>
                                        </div>
                                    </form>
                                    <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                                        <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
                                            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5"
                                                 stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
                                                 class="h-6 w-6 flex-none">
                                                <path d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
                                                      class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                                <path d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5"
                                                      class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                            </svg>
                                            <span class="ml-3">Work</span></h2>
                                        <ol class="mt-6 space-y-4">
                                            <li class="flex gap-4">
                                                <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                                    <img alt="" loading="lazy" width="32" height="32" decoding="async"
                                                         data-nimg="1" class="h-7 w-7" style="color:transparent"
                                                         src="/_next/static/media/planetaria.ecd81ade.svg"></div>
                                                <dl class="flex flex-auto flex-wrap gap-x-2">
                                                    <dt class="sr-only">Company</dt>
                                                    <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">
                                                        Planetaria
                                                    </dd>
                                                    <dt class="sr-only">Role</dt>
                                                    <dd class="text-xs text-zinc-500 dark:text-zinc-400">CEO</dd>
                                                    <dt class="sr-only">Date</dt>
                                                    <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
                                                        aria-label="2019 until Present">
                                                        <time datetime="2019">2019</time>
                                                        <span aria-hidden="true">—</span>
                                                        <time datetime="2023">Present</time>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li class="flex gap-4">
                                                <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                                    <img alt="" loading="lazy" width="28" height="28" decoding="async"
                                                         data-nimg="1" class="h-7 w-7" style="color:transparent"
                                                         src="/_next/static/media/airbnb.b4000690.svg"></div>
                                                <dl class="flex flex-auto flex-wrap gap-x-2">
                                                    <dt class="sr-only">Company</dt>
                                                    <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">
                                                        Airbnb
                                                    </dd>
                                                    <dt class="sr-only">Role</dt>
                                                    <dd class="text-xs text-zinc-500 dark:text-zinc-400">Product
                                                        Designer
                                                    </dd>
                                                    <dt class="sr-only">Date</dt>
                                                    <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
                                                        aria-label="2014 until 2019">
                                                        <time datetime="2014">2014</time>
                                                        <span aria-hidden="true">—</span>
                                                        <time datetime="2019">2019</time>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li class="flex gap-4">
                                                <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                                    <img alt="" loading="lazy" width="28" height="28" decoding="async"
                                                         data-nimg="1" class="h-7 w-7" style="color:transparent"
                                                         src="/_next/static/media/facebook.dd9e7d48.svg"></div>
                                                <dl class="flex flex-auto flex-wrap gap-x-2">
                                                    <dt class="sr-only">Company</dt>
                                                    <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">
                                                        Facebook
                                                    </dd>
                                                    <dt class="sr-only">Role</dt>
                                                    <dd class="text-xs text-zinc-500 dark:text-zinc-400">iOS Software
                                                        Engineer
                                                    </dd>
                                                    <dt class="sr-only">Date</dt>
                                                    <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
                                                        aria-label="2011 until 2014">
                                                        <time datetime="2011">2011</time>
                                                        <span aria-hidden="true">—</span>
                                                        <time datetime="2014">2014</time>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li class="flex gap-4">
                                                <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                                    <img alt="" loading="lazy" width="28" height="28" decoding="async"
                                                         data-nimg="1" class="h-7 w-7" style="color:transparent"
                                                         src="/_next/static/media/starbucks.4a5bd050.svg"></div>
                                                <dl class="flex flex-auto flex-wrap gap-x-2">
                                                    <dt class="sr-only">Company</dt>
                                                    <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">
                                                        Starbucks
                                                    </dd>
                                                    <dt class="sr-only">Role</dt>
                                                    <dd class="text-xs text-zinc-500 dark:text-zinc-400">Shift
                                                        Supervisor
                                                    </dd>
                                                    <dt class="sr-only">Date</dt>
                                                    <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
                                                        aria-label="2008 until 2011">
                                                        <time datetime="2008">2008</time>
                                                        <span aria-hidden="true">—</span>
                                                        <time datetime="2011">2011</time>
                                                    </dd>
                                                </dl>
                                            </li>
                                        </ol>
                                        <a class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 group mt-6 w-full"
                                           href="#">Download CV
                                            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"
                                                 class="h-4 w-4 stroke-zinc-400 transition group-active:stroke-zinc-600 dark:group-hover:stroke-zinc-50 dark:group-active:stroke-zinc-50">
                                                <path d="M4.75 8.75 8 12.25m0 0 3.25-3.5M8 12.25v-8.5"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </svg>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mt-32 flex-none">
            <div class="sm:px-8">
                <div class="mx-auto w-full max-w-7xl lg:px-8">
                    <div class="border-t border-zinc-100 pb-16 pt-10 dark:border-zinc-700/40">
                        <div class="relative px-4 sm:px-8 lg:px-12">
                            <div class="mx-auto max-w-2xl lg:max-w-5xl">
                                <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
                                    <div class="flex flex-wrap justify-center gap-x-6 gap-y-1 text-sm font-medium text-zinc-800 dark:text-zinc-200">
                                        <a class="transition hover:text-teal-500 dark:hover:text-teal-400"
                                           href="/about">About</a><a
                                                class="transition hover:text-teal-500 dark:hover:text-teal-400"
                                                href="/projects">Projects</a><a
                                                class="transition hover:text-teal-500 dark:hover:text-teal-400"
                                                href="/speaking">Speaking</a><a
                                                class="transition hover:text-teal-500 dark:hover:text-teal-400"
                                                href="/uses">Uses</a></div>
                                    <p class="text-sm text-zinc-400 dark:text-zinc-500">© <!-- -->2023<!-- --> Spencer
                                        Sharp. All rights reserved.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="/_next/static/chunks/webpack-995b173d486d57e8.js" async=""></script>
<script>(self.__next_f = self.__next_f || []).push([0])</script>
<script>self.__next_f.push([1, "1:HL[\"/_next/static/css/8f9b5194febc3a9c.css\",{\"as\":\"style\"}]\n0:\"$L2\"\n"])</script>
<script>self.__next_f.push([1, "3:I{\"id\":7948,\"chunks\":[\"272:static/chunks/webpack-995b173d486d57e8.js\",\"971:static/chunks/fd9d1056-8864aced9178d7e5.js\",\"596:static/chunks/596-11e5f04105db81dc.js\"],\"name\":\"default\",\"async\":false}\n5:I{\"id\":6628,\"chunks\":[\"272:static/chunks/webpack-995b173d486d57e8.js\",\"971:static/chunks/fd9d1056-8864aced9178d7e5.js\",\"596:static/chunks/596-11e5f04105db81dc.js\"],\"name\":\"\",\"async\":false}\n6:I{\"id\":4129,\"chunks\":[\"685:static/chunks/685-cc609dff10aecb7e.js\",\"144:static/chunks/144-85e34c31174bdd49.js\",\"519:static"])</script>
<script>self.__next_f.push([1, "/chunks/519-b7ef0c3a1a39a708.js\",\"185:static/chunks/app/layout-a18b915ca17aa142.js\"],\"name\":\"Providers\",\"async\":false}\n7:I{\"id\":4222,\"chunks\":[\"685:static/chunks/685-cc609dff10aecb7e.js\",\"144:static/chunks/144-85e34c31174bdd49.js\",\"519:static/chunks/519-b7ef0c3a1a39a708.js\",\"185:static/chunks/app/layout-a18b915ca17aa142.js\"],\"name\":\"Header\",\"async\":false}\n8:I{\"id\":7767,\"chunks\":[\"272:static/chunks/webpack-995b173d486d57e8.js\",\"971:static/chunks/fd9d1056-8864aced9178d7e5.js\",\"596:static/chunks/596-11e5f04105"])</script>
<script>self.__next_f.push([1, "db81dc.js\"],\"name\":\"default\",\"async\":false}\n9:I{\"id\":7920,\"chunks\":[\"272:static/chunks/webpack-995b173d486d57e8.js\",\"971:static/chunks/fd9d1056-8864aced9178d7e5.js\",\"596:static/chunks/596-11e5f04105db81dc.js\"],\"name\":\"default\",\"async\":false}\na:I{\"id\":6685,\"chunks\":[\"685:static/chunks/685-cc609dff10aecb7e.js\",\"144:static/chunks/144-85e34c31174bdd49.js\",\"931:static/chunks/app/page-13da4952bf46c22e.js\"],\"name\":\"\",\"async\":false}\n"])</script>
<script>self.__next_f.push([1, "2:[[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"/_next/static/css/8f9b5194febc3a9c.css\",\"precedence\":\"next\"}]],[\"$\",\"$L3\",null,{\"buildId\":\"6mOD9kWreBCJ8A-bZnzJk\",\"assetPrefix\":\"\",\"initialCanonicalUrl\":\"/\",\"initialTree\":[\"\",{\"children\":[\"__PAGE__\",{}]},\"$undefined\",\"$undefined\",true],\"initialHead\":\"$L4\",\"globalErrorComponent\":\"$5\",\"children\":[null,[\"$\",\"html\",null,{\"lang\":\"en\",\"className\":\"h-full antialiased\",\"suppressHydrationWarning\":true,\"children\":[\"$\",\"body\",null,{\"className\":\"flex h-full bg-zinc-50 dark:bg-black\",\"children\":[\"$\",\"$L6\",null,{\"children\":[\"$\",\"div\",null,{\"className\":\"flex w-full\",\"children\":[[\"$\",\"div\",null,{\"className\":\"fixed inset-0 flex justify-center sm:px-8\",\"children\":[\"$\",\"div\",null,{\"className\":\"flex w-full max-w-7xl lg:px-8\",\"children\":[\"$\",\"div\",null,{\"className\":\"w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20\"}]}]}],[\"$\",\"div\",null,{\"className\":\"relative flex w-full flex-col\",\"children\":[[\"$\",\"$L7\",null,{}],[\"$\",\"main\",null,{\"className\":\"flex-auto\",\"children\":[\"$\",\"$L8\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\"],\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"loading\":\"$undefined\",\"loadingStyles\":\"$undefined\",\"hasLoading\":false,\"template\":[\"$\",\"$L9\",null,{}],\"templateStyles\":\"$undefined\",\"notFound\":[\"$\",\"div\",null,{\"className\":\"sm:px-8 flex h-full items-center pt-16 sm:pt-32\",\"children\":[\"$\",\"div\",null,{\"className\":\"mx-auto w-full max-w-7xl lg:px-8\",\"children\":[\"$\",\"div\",null,{\"className\":\"relative px-4 sm:px-8 lg:px-12\",\"children\":[\"$\",\"div\",null,{\"className\":\"mx-auto max-w-2xl lg:max-w-5xl\",\"children\":[\"$\",\"div\",null,{\"className\":\"flex flex-col items-center\",\"children\":[[\"$\",\"p\",null,{\"className\":\"text-base font-semibold text-zinc-400 dark:text-zinc-500\",\"children\":\"404\"}],[\"$\",\"h1\",null,{\"className\":\"mt-4 text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl\",\"children\":\"Page not found\"}],[\"$\",\"p\",null,{\"className\":\"mt-4 text-base text-zinc-600 dark:text-zinc-400\",\"children\":\"Sorry, we couldn’t find the page you’re looking for.\"}],[\"$\",\"$La\",null,{\"className\":\"inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 mt-4\",\"href\":\"/\",\"children\":\"Go back home\"}]]}]}]}]}]}],\"notFoundStyles\":[],\"childProp\":{\"current\":[\"$Lb\",\"$Lc\",null],\"segment\":\"__PAGE__\"},\"styles\":[]}]}],[\"$\",\"footer\",null,{\"className\":\"mt-32 flex-none\",\"children\":[\"$\",\"div\",null,{\"className\":\"sm:px-8\",\"children\":[\"$\",\"div\",null,{\"className\":\"mx-auto w-full max-w-7xl lg:px-8\",\"children\":[\"$\",\"div\",null,{\"className\":\"border-t border-zinc-100 pb-16 pt-10 dark:border-zinc-700/40\",\"children\":[\"$\",\"div\",null,{\"className\":\"relative px-4 sm:px-8 lg:px-12\",\"children\":[\"$\",\"div\",null,{\"className\":\"mx-auto max-w-2xl lg:max-w-5xl\",\"children\":[\"$\",\"div\",null,{\"className\":\"flex flex-col items-center justify-between gap-6 sm:flex-row\",\"children\":[[\"$\",\"div\",null,{\"className\":\"flex flex-wrap justify-center gap-x-6 gap-y-1 text-sm font-medium text-zinc-800 dark:text-zinc-200\",\"children\":[[\"$\",\"$La\",null,{\"href\":\"/about\",\"className\":\"transition hover:text-teal-500 dark:hover:text-teal-400\",\"children\":\"About\"}],[\"$\",\"$La\",null,{\"href\":\"/projects\",\"className\":\"transition hover:text-teal-500 dark:hover:text-teal-400\",\"children\":\"Projects\"}],[\"$\",\"$La\",null,{\"href\":\"/speaking\",\"className\":\"transition hover:text-teal-500 dark:hover:text-teal-400\",\"children\":\"Speaking\"}],[\"$\",\"$La\",null,{\"href\":\"/uses\",\"className\":\"transition hover:text-teal-500 dark:hover:text-teal-400\",\"children\":\"Uses\"}]]}],[\"$\",\"p\",null,{\"className\":\"text-sm text-zinc-400 dark:text-zinc-500\",\"children\":[\"© \",2023,\" Spencer Sharp. All rights reserved.\"]}]]}]}]}]}]}]}]}]]}]]}]}]}]}],null]}]]\n"])</script>
<script>self.__next_f.push([1, "4:[[\"$\",\"meta\",\"0\",{\"charSet\":\"utf-8\"}],[\"$\",\"title\",\"1\",{\"children\":\"Spencer Sharp - Software designer, founder, and amateur astronaut\"}],[\"$\",\"meta\",\"2\",{\"name\":\"description\",\"content\":\"I’m Spencer, a software designer and entrepreneur based in New York City. I’m the founder and CEO of Planetaria, where we develop technologies that empower regular people to explore space on their own terms.\"}],[\"$\",\"meta\",\"3\",{\"name\":\"viewport\",\"content\":\"width=device-width, initial-scale=1\"}],[\"$\",\"link\",\"4\",{\"rel\":\"alternate\",\"type\":\"application/rss+xml\",\"href\":\"https://spotlight.tailwindui.com/feed.xml\"}],[\"$\",\"link\",\"5\",{\"rel\":\"icon\",\"href\":\"/favicon.ico\",\"type\":\"image/x-icon\",\"sizes\":\"16x16\"}]]\n"])</script>
<script>self.__next_f.push([1, "b:null\n"])</script>
<script>self.__next_f.push([1, "e:I{\"id\":3222,\"chunks\":[\"685:static/chunks/685-cc609dff10aecb7e.js\",\"144:static/chunks/144-85e34c31174bdd49.js\",\"931:static/chunks/app/page-13da4952bf46c22e.js\"],\"name\":\"Image\",\"async\":false}\nd:T526,"])</script>
<script>self.__next_f.push([1, "M12 3c-2.444 0-2.75.01-3.71.054-.959.044-1.613.196-2.185.418A4.412 4.412 0 0 0 4.51 4.511c-.5.5-.809 1.002-1.039 1.594-.222.572-.374 1.226-.418 2.184C3.01 9.25 3 9.556 3 12s.01 2.75.054 3.71c.044.959.196 1.613.418 2.185.23.592.538 1.094 1.039 1.595.5.5 1.002.808 1.594 1.038.572.222 1.226.374 2.184.418C9.25 20.99 9.556 21 12 21s2.75-.01 3.71-.054c.959-.044 1.613-.196 2.185-.419a4.412 4.412 0 0 0 1.595-1.038c.5-.5.808-1.002 1.038-1.594.222-.572.374-1.226.418-2.184.044-.96.054-1.267.054-3.711s-.01-2.75-.054-3.71c-.044-.959-.196-1.613-.419-2.185A4.412 4.412 0 0 0 19.49 4.51c-.5-.5-1.002-.809-1.594-1.039-.572-.222-1.226-.374-2.184-.418C14.75 3.01 14.444 3 12 3Zm0 1.622c2.403 0 2.688.009 3.637.052.877.04 1.354.187 1.67.31.421.163.72.358 1.036.673.315.315.51.615.673 1.035.123.317.27.794.31 1.671.043.95.052 1.234.052 3.637s-.009 2.688-.052 3.637c-.04.877-.187 1.354-.31 1.67-.163.421-.358.72-.673 1.036a2.79 2.79 0 0 1-1.035.673c-.317.123-.794.27-1.671.31-.95.043-1.234.052-3.637.052s-2.688-.009-3.637-.052c-.877-.04-1.354-.187-1.67-.31a2.789 2.789 0 0 1-1.036-.673 2.79 2.79 0 0 1-.673-1.035c-.123-.317-.27-.794-.31-1.671-.043-.95-.052-1.234-.052-3.637s.009-2.688.052-3.637c.04-.877.187-1.354.31-1.67.163-.421.358-.72.673-1.036.315-.315.615-.51 1.035-.673.317-.123.794-.27 1.671-.31.95-.043 1.234-.052 3.637-.052Z"])</script>
<script>self.__next_f.push([1, "c:[[\"$\",\"div\",null,{\"className\":\"sm:px-8 mt-9\",\"children\":[\"$\",\"div\",null,{\"className\":\"mx-auto w-full max-w-7xl lg:px-8\",\"children\":[\"$\",\"div\",null,{\"className\":\"relative px-4 sm:px-8 lg:px-12\",\"children\":[\"$\",\"div\",null,{\"className\":\"mx-auto max-w-2xl lg:max-w-5xl\",\"children\":[\"$\",\"div\",null,{\"className\":\"max-w-2xl\",\"children\":[[\"$\",\"h1\",null,{\"className\":\"text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl\",\"children\":\"Software designer, founder, and amateur astronaut.\"}],[\"$\",\"p\",null,{\"className\":\"mt-6 text-base text-zinc-600 dark:text-zinc-400\",\"children\":\"I’m Spencer, a software designer and entrepreneur based in New York City. I’m the founder and CEO of Planetaria, where we develop technologies that empower regular people to explore space on their own terms.\"}],[\"$\",\"div\",null,{\"className\":\"mt-6 flex gap-6\",\"children\":[[\"$\",\"$La\",null,{\"className\":\"group -m-1 p-1\",\"href\":\"https://twitter.com\",\"aria-label\":\"Follow on Twitter\",\"children\":[\"$\",\"svg\",null,{\"viewBox\":\"0 0 24 24\",\"aria-hidden\":\"true\",\"className\":\"h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300\",\"children\":[\"$\",\"path\",null,{\"d\":\"M20.055 7.983c.011.174.011.347.011.523 0 5.338-3.92 11.494-11.09 11.494v-.003A10.755 10.755 0 0 1 3 18.186c.308.038.618.057.928.058a7.655 7.655 0 0 0 4.841-1.733c-1.668-.032-3.13-1.16-3.642-2.805a3.753 3.753 0 0 0 1.76-.07C5.07 13.256 3.76 11.6 3.76 9.676v-.05a3.77 3.77 0 0 0 1.77.505C3.816 8.945 3.288 6.583 4.322 4.737c1.98 2.524 4.9 4.058 8.034 4.22a4.137 4.137 0 0 1 1.128-3.86A3.807 3.807 0 0 1 19 5.274a7.657 7.657 0 0 0 2.475-.98c-.29.934-.9 1.729-1.713 2.233A7.54 7.54 0 0 0 22 5.89a8.084 8.084 0 0 1-1.945 2.093Z\"}]}]}],[\"$\",\"$La\",null,{\"className\":\"group -m-1 p-1\",\"href\":\"https://instagram.com\",\"aria-label\":\"Follow on Instagram\",\"children\":[\"$\",\"svg\",null,{\"viewBox\":\"0 0 24 24\",\"aria-hidden\":\"true\",\"className\":\"h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300\",\"children\":[[\"$\",\"path\",null,{\"d\":\"$d\"}],[\"$\",\"path\",null,{\"d\":\"M12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm0-7.622a4.622 4.622 0 1 0 0 9.244 4.622 4.622 0 0 0 0-9.244Zm5.884-.182a1.08 1.08 0 1 1-2.16 0 1.08 1.08 0 0 1 2.16 0Z\"}]]}]}],[\"$\",\"$La\",null,{\"className\":\"group -m-1 p-1\",\"href\":\"https://github.com\",\"aria-label\":\"Follow on GitHub\",\"children\":[\"$\",\"svg\",null,{\"viewBox\":\"0 0 24 24\",\"aria-hidden\":\"true\",\"className\":\"h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300\",\"children\":[\"$\",\"path\",null,{\"fillRule\":\"evenodd\",\"clipRule\":\"evenodd\",\"d\":\"M12 2C6.475 2 2 6.588 2 12.253c0 4.537 2.862 8.369 6.838 9.727.5.09.687-.218.687-.487 0-.243-.013-1.05-.013-1.91C7 20.059 6.35 18.957 6.15 18.38c-.113-.295-.6-1.205-1.025-1.448-.35-.192-.85-.667-.013-.68.788-.012 1.35.744 1.538 1.051.9 1.551 2.338 1.116 2.912.846.088-.666.35-1.115.638-1.371-2.225-.256-4.55-1.14-4.55-5.062 0-1.115.387-2.038 1.025-2.756-.1-.256-.45-1.307.1-2.717 0 0 .837-.269 2.75 1.051.8-.23 1.65-.346 2.5-.346.85 0 1.7.115 2.5.346 1.912-1.333 2.75-1.05 2.75-1.05.55 1.409.2 2.46.1 2.716.637.718 1.025 1.628 1.025 2.756 0 3.934-2.337 4.806-4.562 5.062.362.32.675.936.675 1.897 0 1.371-.013 2.473-.013 2.82 0 .268.188.589.688.486a10.039 10.039 0 0 0 4.932-3.74A10.447 10.447 0 0 0 22 12.253C22 6.588 17.525 2 12 2Z\"}]}]}],[\"$\",\"$La\",null,{\"className\":\"group -m-1 p-1\",\"href\":\"https://linkedin.com\",\"aria-label\":\"Follow on LinkedIn\",\"children\":[\"$\",\"svg\",null,{\"viewBox\":\"0 0 24 24\",\"aria-hidden\":\"true\",\"className\":\"h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300\",\"children\":[\"$\",\"path\",null,{\"d\":\"M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 01-1.548-1.549 1.548 1.548 0 111.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z\"}]}]}]]}]]}]}]}]}]}],[\"$\",\"div\",null,{\"className\":\"mt-16 sm:mt-20\",\"children\":[\"$\",\"div\",null,{\"className\":\"-my-4 flex justify-center gap-5 overflow-hidden py-4 sm:gap-8\",\"children\":[[\"$\",\"div\",\"/_next/static/media/image-1.c5d2141c.jpg\",{\"className\":\"relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl rotate-2\",\"children\":[\"$\",\"$Le\",null,{\"src\":{\"src\":\"/_next/static/media/image-1.c5d2141c.jpg\",\"height\":5616,\"width\":3744,\"blurDataURL\":\"data:image/jpeg;base64,/9j/2wBDAAoHBwgHBgoICAgLCgoLDhgQDg0NDh0VFhEYIx8lJCIfIiEmKzcvJik0KSEiMEExNDk7Pj4+JS5ESUM8SDc9Pjv/2wBDAQoLCw4NDhwQEBw7KCIoOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozv/wAARCAAIAAUDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAT/xAAfEAAABgEFAAAAAAAAAAAAAAAAAgMEBREBBxMhUcH/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABURAQEAAAAAAAAAAAAAAAAAAAAR/9oADAMBAAIRAxEAPwCeT1T3nWStoePcIE4IddOzVWO/AAASP//Z\",\"blurWidth\":5,\"blurHeight\":8},\"alt\":\"\",\"sizes\":\"(min-width: 640px) 18rem, 11rem\",\"className\":\"absolute inset-0 h-full w-full object-cover\"}]}],[\"$\",\"div\",\"/_next/static/media/image-2.3c6c01cf.jpg\",{\"className\":\"relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl -rotate-2\",\"children\":[\"$\",\"$Le\",null,{\"src\":{\"src\":\"/_next/static/media/image-2.3c6c01cf.jpg\",\"height\":2624,\"width\":3936,\"blurDataURL\":\"data:image/jpeg;base64,/9j/2wBDAAoHBwgHBgoICAgLCgoLDhgQDg0NDh0VFhEYIx8lJCIfIiEmKzcvJik0KSEiMEExNDk7Pj4+JS5ESUM8SDc9Pjv/2wBDAQoLCw4NDhwQEBw7KCIoOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozv/wAARCAAFAAgDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAf/xAAdEAACAQQDAAAAAAAAAAAAAAAAAgEEBRESIUOx/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAH/xAAYEQACAwAAAAAAAAAAAAAAAAAAAQMRIf/aAAwDAQACEQMRAD8AnsWune3tWQixr1449yACRu07EmPD/9k=\",\"blurWidth\":8,\"blurHeight\":5},\"alt\":\"\",\"sizes\":\"(min-width: 640px) 18rem, 11rem\",\"className\":\"absolute inset-0 h-full w-full object-cover\"}]}],[\"$\",\"div\",\"/_next/static/media/image-3.454151b1.jpg\",{\"className\":\"relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl rotate-2\",\"children\":[\"$\",\"$Le\",null,{\"src\":{\"src\":\"/_next/static/media/image-3.454151b1.jpg\",\"height\":3840,\"width\":5760,\"blurDataURL\":\"data:image/jpeg;base64,/9j/2wBDAAoHBwgHBgoICAgLCgoLDhgQDg0NDh0VFhEYIx8lJCIfIiEmKzcvJik0KSEiMEExNDk7Pj4+JS5ESUM8SDc9Pjv/2wBDAQoLCw4NDhwQEBw7KCIoOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozv/wAARCAAFAAgDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAP/xAAeEAACAgICAwAAAAAAAAAAAAABAwACBBEFBhJBUf/EABQBAQAAAAAAAAAAAAAAAAAAAAH/xAAVEQEBAAAAAAAAAAAAAAAAAAABAP/aAAwDAQACEQMRAD8AuXZPAcSzstct77JZa1cQ30ryI0Dr0B8iIgMt/9k=\",\"blurWidth\":8,\"blurHeight\":5},\"alt\":\"\",\"sizes\":\"(min-width: 640px) 18rem, 11rem\",\"className\":\"absolute inset-0 h-full w-full object-cover\"}]}],[\"$\",\"div\",\"/_next/static/media/image-4.5c6d0ed6.jpg\",{\"className\":\"relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl rotate-2\",\"children\":[\"$\",\"$Le\",null,{\"src\":{\"src\":\"/_next/static/media/image-4.5c6d0ed6.jpg\",\"height\":3000,\"width\":2400,\"blurDataURL\":\"data:image/jpeg;base64,/9j/2wBDAAoHBwgHBgoICAgLCgoLDhgQDg0NDh0VFhEYIx8lJCIfIiEmKzcvJik0KSEiMEExNDk7Pj4+JS5ESUM8SDc9Pjv/2wBDAQoLCw4NDhwQEBw7KCIoOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozv/wAARCAAIAAYDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAX/xAAhEAABAwIHAQAAAAAAAAAAAAABAAIDBBEFBhITIUFRcf/EABUBAQEAAAAAAAAAAAAAAAAAAAED/8QAGREAAgMBAAAAAAAAAAAAAAAAAAMBAhJR/9oADAMBAAIRAxEAPwC7HjmUo6CCskOrcaG2hYXOBtcg8de/ERE7sThC+H//2Q==\",\"blurWidth\":6,\"blurHeight\":8},\"alt\":\"\",\"sizes\":\"(min-width: 640px) 18rem, 11rem\",\"className\":\"absolute inset-0 h-full w-full object-cover\"}]}],[\"$\",\"div\",\"/_next/static/media/image-5.6c6f2784.jpg\",{\"className\":\"relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl -rotate-2\",\"children\":[\"$\",\"$Le\",null,{\"src\":{\"src\":\"/_next/static/media/image-5.6c6f2784.jpg\",\"height\":2384,\"width\":4240,\"blurDataURL\":\"data:image/jpeg;base64,/9j/2wBDAAoHBwgHBgoICAgLCgoLDhgQDg0NDh0VFhEYIx8lJCIfIiEmKzcvJik0KSEiMEExNDk7Pj4+JS5ESUM8SDc9Pjv/2wBDAQoLCw4NDhwQEBw7KCIoOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozv/wAARCAAEAAgDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAb/xAAcEAABBQADAAAAAAAAAAAAAAABAAIDBREEYXH/xAAVAQEBAAAAAAAAAAAAAAAAAAAEBf/EABcRAAMBAAAAAAAAAAAAAAAAAAABAjH/2gAMAwEAAhEDEQA/AJqvr4uW0SSvk1oAwEZhHnSIiDRWWs//2Q==\",\"blurWidth\":8,\"blurHeight\":4},\"alt\":\"\",\"sizes\":\"(min-width: 640px) 18rem, 11rem\",\"className\":\"absolute inset-0 h-full w-full object-cover\"}]}]]}]}],[\"$\",\"div\",null,{\"className\":\"sm:px-8 mt-24 md:mt-28\",\"children\":[\"$\",\"div\",null,{\"className\":\"mx-auto w-full max-w-7xl lg:px-8\",\"children\":[\"$\",\"div\",null,{\"className\":\"relative px-4 sm:px-8 lg:px-12\",\"children\":[\"$\",\"div\",null,{\"className\":\"mx-auto max-w-2xl lg:max-w-5xl\",\"children\":[\"$\",\"div\",null,{\"className\":\"mx-auto grid max-w-xl grid-cols-1 gap-y-20 lg:max-w-none lg:grid-cols-2\",\"children\":[[\"$\",\"div\",null,{\"className\":\"flex flex-col gap-16\",\"children\":[[\"$\",\"article\",null,{\"className\":\"group relative flex flex-col items-start\",\"children\":[[\"$\",\"h2\",null,{\"className\":\"text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100\",\"children\":[[\"$\",\"div\",null,{\"className\":\"absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 dark:bg-zinc-800/50 sm:-inset-x-6 sm:rounded-2xl\"}],[\"$\",\"$La\",null,{\"href\":\"/articles/crafting-a-design-system-for-a-multiplanetary-future\",\"children\":[[\"$\",\"span\",null,{\"className\":\"absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl\"}],[\"$\",\"span\",null,{\"className\":\"relative z-10\",\"children\":\"Crafting a design system for a multiplanetary future\"}]]}]]}],[\"$\",\"time\",null,{\"className\":\"relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5\",\"dateTime\":\"2022-09-05\",\"children\":[[\"$\",\"span\",null,{\"className\":\"absolute inset-y-0 left-0 flex items-center\",\"aria-hidden\":\"true\",\"children\":[\"$\",\"span\",null,{\"className\":\"h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500\"}]}],\"September 5, 2022\"]}],[\"$\",\"p\",null,{\"className\":\"relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400\",\"children\":\"Most companies try to stay ahead of the curve when it comes to visual design, but for Planetaria we needed to create a brand that would still inspire us 100 years from now when humanity has spread across our entire solar system.\"}],[\"$\",\"div\",null,{\"aria-hidden\":\"true\",\"className\":\"relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500\",\"children\":[\"Read article\",[\"$\",\"svg\",null,{\"viewBox\":\"0 0 16 16\",\"fill\":\"none\",\"aria-hidden\":\"true\",\"className\":\"ml-1 h-4 w-4 stroke-current\",\"children\":[\"$\",\"path\",null,{\"d\":\"M6.75 5.75 9.25 8l-2.5 2.25\",\"strokeWidth\":\"1.5\",\"strokeLinecap\":\"round\",\"strokeLinejoin\":\"round\"}]}]]}]]}],[\"$\",\"article\",null,{\"className\":\"group relative flex flex-col items-start\",\"children\":[[\"$\",\"h2\",null,{\"className\":\"text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100\",\"children\":[[\"$\",\"div\",null,{\"className\":\"absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 dark:bg-zinc-800/50 sm:-inset-x-6 sm:rounded-2xl\"}],[\"$\",\"$La\",null,{\"href\":\"/articles/introducing-animaginary\",\"children\":[[\"$\",\"span\",null,{\"className\":\"absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl\"}],[\"$\",\"span\",null,{\"className\":\"relative z-10\",\"children\":\"Introducing Animaginary: High performance web animations\"}]]}]]}],[\"$\",\"time\",null,{\"className\":\"relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5\",\"dateTime\":\"2022-09-02\",\"children\":[[\"$\",\"span\",null,{\"className\":\"absolute inset-y-0 left-0 flex items-center\",\"aria-hidden\":\"true\",\"children\":[\"$\",\"span\",null,{\"className\":\"h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500\"}]}],\"September 2, 2022\"]}],[\"$\",\"p\",null,{\"className\":\"relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400\",\"children\":\"When you’re building a website for a company as ambitious as Planetaria, you need to make an impression. I wanted people to visit our website and see animations that looked more realistic than reality itself.\"}],[\"$\",\"div\",null,{\"aria-hidden\":\"true\",\"className\":\"relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500\",\"children\":[\"Read article\",[\"$\",\"svg\",null,{\"viewBox\":\"0 0 16 16\",\"fill\":\"none\",\"aria-hidden\":\"true\",\"className\":\"ml-1 h-4 w-4 stroke-current\",\"children\":[\"$\",\"path\",null,{\"d\":\"M6.75 5.75 9.25 8l-2.5 2.25\",\"strokeWidth\":\"1.5\",\"strokeLinecap\":\"round\",\"strokeLinejoin\":\"round\"}]}]]}]]}],[\"$\",\"article\",null,{\"className\":\"group relative flex flex-col items-start\",\"children\":[[\"$\",\"h2\",null,{\"className\":\"text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100\",\"children\":[[\"$\",\"div\",null,{\"className\":\"absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 dark:bg-zinc-800/50 sm:-inset-x-6 sm:rounded-2xl\"}],[\"$\",\"$La\",null,{\"href\":\"/articles/rewriting-the-cosmos-kernel-in-rust\",\"children\":[[\"$\",\"span\",null,{\"className\":\"absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl\"}],[\"$\",\"span\",null,{\"className\":\"relative z-10\",\"children\":\"Rewriting the cosmOS kernel in Rust\"}]]}]]}],[\"$\",\"time\",null,{\"className\":\"relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5\",\"dateTime\":\"2022-07-14\",\"children\":[[\"$\",\"span\",null,{\"className\":\"absolute inset-y-0 left-0 flex items-center\",\"aria-hidden\":\"true\",\"children\":[\"$\",\"span\",null,{\"className\":\"h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500\"}]}],\"July 14, 2022\"]}],[\"$\",\"p\",null,{\"className\":\"relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400\",\"children\":\"When we released the first version of cosmOS last year, it was written in Go. Go is a wonderful programming language, but it’s been a while since I’ve seen an article on the front page of Hacker News about rewriting some important tool in Go and I see articles on there about rewriting things in Rust every single week.\"}],[\"$\",\"div\",null,{\"aria-hidden\":\"true\",\"className\":\"relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500\",\"children\":[\"Read article\",[\"$\",\"svg\",null,{\"viewBox\":\"0 0 16 16\",\"fill\":\"none\",\"aria-hidden\":\"true\",\"className\":\"ml-1 h-4 w-4 stroke-current\",\"children\":[\"$\",\"path\",null,{\"d\":\"M6.75 5.75 9.25 8l-2.5 2.25\",\"strokeWidth\":\"1.5\",\"strokeLinecap\":\"round\",\"strokeLinejoin\":\"round\"}]}]]}]]}]]}],[\"$\",\"div\",null,{\"className\":\"space-y-10 lg:pl-16 xl:pl-24\",\"children\":[[\"$\",\"form\",null,{\"action\":\"/thank-you\",\"className\":\"rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40\",\"children\":[[\"$\",\"h2\",null,{\"className\":\"flex text-sm font-semibold text-zinc-900 dark:text-zinc-100\",\"children\":[[\"$\",\"svg\",null,{\"viewBox\":\"0 0 24 24\",\"fill\":\"none\",\"strokeWidth\":\"1.5\",\"strokeLinecap\":\"round\",\"strokeLinejoin\":\"round\",\"aria-hidden\":\"true\",\"className\":\"h-6 w-6 flex-none\",\"children\":[[\"$\",\"path\",null,{\"d\":\"M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z\",\"className\":\"fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500\"}],[\"$\",\"path\",null,{\"d\":\"m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6\",\"className\":\"stroke-zinc-400 dark:stroke-zinc-500\"}]]}],[\"$\",\"span\",null,{\"className\":\"ml-3\",\"children\":\"Stay up to date\"}]]}],[\"$\",\"p\",null,{\"className\":\"mt-2 text-sm text-zinc-600 dark:text-zinc-400\",\"children\":\"Get notified when I publish something new, and unsubscribe at any time.\"}],[\"$\",\"div\",null,{\"className\":\"mt-6 flex\",\"children\":[[\"$\",\"input\",null,{\"type\":\"email\",\"placeholder\":\"Email address\",\"aria-label\":\"Email address\",\"required\":true,\"className\":\"min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10 sm:text-sm\"}],[\"$\",\"button\",null,{\"className\":\"inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-800 font-semibold text-zinc-100 hover:bg-zinc-700 active:bg-zinc-800 active:text-zinc-100/70 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:active:bg-zinc-700 dark:active:text-zinc-100/70 ml-4 flex-none\",\"type\":\"submit\",\"children\":\"Join\"}]]}]]}],[\"$\",\"div\",null,{\"className\":\"rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40\",\"children\":[[\"$\",\"h2\",null,{\"className\":\"flex text-sm font-semibold text-zinc-900 dark:text-zinc-100\",\"children\":[[\"$\",\"svg\",null,{\"viewBox\":\"0 0 24 24\",\"fill\":\"none\",\"strokeWidth\":\"1.5\",\"strokeLinecap\":\"round\",\"strokeLinejoin\":\"round\",\"aria-hidden\":\"true\",\"className\":\"h-6 w-6 flex-none\",\"children\":[[\"$\",\"path\",null,{\"d\":\"M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z\",\"className\":\"fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500\"}],[\"$\",\"path\",null,{\"d\":\"M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5\",\"className\":\"stroke-zinc-400 dark:stroke-zinc-500\"}]]}],[\"$\",\"span\",null,{\"className\":\"ml-3\",\"children\":\"Work\"}]]}],[\"$\",\"ol\",null,{\"className\":\"mt-6 space-y-4\",\"children\":[[\"$\",\"li\",null,{\"className\":\"flex gap-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0\",\"children\":[\"$\",\"$Le\",null,{\"src\":{\"src\":\"/_next/static/media/planetaria.ecd81ade.svg\",\"height\":32,\"width\":32,\"blurWidth\":0,\"blurHeight\":0},\"alt\":\"\",\"className\":\"h-7 w-7\",\"unoptimized\":true}]}],[\"$\",\"dl\",null,{\"className\":\"flex flex-auto flex-wrap gap-x-2\",\"children\":[[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Company\"}],[\"$\",\"dd\",null,{\"className\":\"w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100\",\"children\":\"Planetaria\"}],[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Role\"}],[\"$\",\"dd\",null,{\"className\":\"text-xs text-zinc-500 dark:text-zinc-400\",\"children\":\"CEO\"}],[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Date\"}],[\"$\",\"dd\",null,{\"className\":\"ml-auto text-xs text-zinc-400 dark:text-zinc-500\",\"aria-label\":\"2019 until Present\",\"children\":[[\"$\",\"time\",null,{\"dateTime\":\"2019\",\"children\":\"2019\"}],\" \",[\"$\",\"span\",null,{\"aria-hidden\":\"true\",\"children\":\"—\"}],\" \",[\"$\",\"time\",null,{\"dateTime\":\"2023\",\"children\":\"Present\"}]]}]]}]]}],[\"$\",\"li\",null,{\"className\":\"flex gap-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0\",\"children\":[\"$\",\"$Le\",null,{\"src\":{\"src\":\"/_next/static/media/airbnb.b4000690.svg\",\"height\":28,\"width\":28,\"blurWidth\":0,\"blurHeight\":0},\"alt\":\"\",\"className\":\"h-7 w-7\",\"unoptimized\":true}]}],[\"$\",\"dl\",null,{\"className\":\"flex flex-auto flex-wrap gap-x-2\",\"children\":[[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Company\"}],[\"$\",\"dd\",null,{\"className\":\"w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100\",\"children\":\"Airbnb\"}],[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Role\"}],[\"$\",\"dd\",null,{\"className\":\"text-xs text-zinc-500 dark:text-zinc-400\",\"children\":\"Product Designer\"}],[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Date\"}],[\"$\",\"dd\",null,{\"className\":\"ml-auto text-xs text-zinc-400 dark:text-zinc-500\",\"aria-label\":\"2014 until 2019\",\"children\":[[\"$\",\"time\",null,{\"dateTime\":\"2014\",\"children\":\"2014\"}],\" \",[\"$\",\"span\",null,{\"aria-hidden\":\"true\",\"children\":\"—\"}],\" \",[\"$\",\"time\",null,{\"dateTime\":\"2019\",\"children\":\"2019\"}]]}]]}]]}],[\"$\",\"li\",null,{\"className\":\"flex gap-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0\",\"children\":[\"$\",\"$Le\",null,{\"src\":{\"src\":\"/_next/static/media/facebook.dd9e7d48.svg\",\"height\":28,\"width\":28,\"blurWidth\":0,\"blurHeight\":0},\"alt\":\"\",\"className\":\"h-7 w-7\",\"unoptimized\":true}]}],[\"$\",\"dl\",null,{\"className\":\"flex flex-auto flex-wrap gap-x-2\",\"children\":[[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Company\"}],[\"$\",\"dd\",null,{\"className\":\"w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100\",\"children\":\"Facebook\"}],[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Role\"}],[\"$\",\"dd\",null,{\"className\":\"text-xs text-zinc-500 dark:text-zinc-400\",\"children\":\"iOS Software Engineer\"}],[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Date\"}],[\"$\",\"dd\",null,{\"className\":\"ml-auto text-xs text-zinc-400 dark:text-zinc-500\",\"aria-label\":\"2011 until 2014\",\"children\":[[\"$\",\"time\",null,{\"dateTime\":\"2011\",\"children\":\"2011\"}],\" \",[\"$\",\"span\",null,{\"aria-hidden\":\"true\",\"children\":\"—\"}],\" \",[\"$\",\"time\",null,{\"dateTime\":\"2014\",\"children\":\"2014\"}]]}]]}]]}],[\"$\",\"li\",null,{\"className\":\"flex gap-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0\",\"children\":[\"$\",\"$Le\",null,{\"src\":{\"src\":\"/_next/static/media/starbucks.4a5bd050.svg\",\"height\":28,\"width\":28,\"blurWidth\":0,\"blurHeight\":0},\"alt\":\"\",\"className\":\"h-7 w-7\",\"unoptimized\":true}]}],[\"$\",\"dl\",null,{\"className\":\"flex flex-auto flex-wrap gap-x-2\",\"children\":[[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Company\"}],[\"$\",\"dd\",null,{\"className\":\"w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100\",\"children\":\"Starbucks\"}],[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Role\"}],[\"$\",\"dd\",null,{\"className\":\"text-xs text-zinc-500 dark:text-zinc-400\",\"children\":\"Shift Supervisor\"}],[\"$\",\"dt\",null,{\"className\":\"sr-only\",\"children\":\"Date\"}],[\"$\",\"dd\",null,{\"className\":\"ml-auto text-xs text-zinc-400 dark:text-zinc-500\",\"aria-label\":\"2008 until 2011\",\"children\":[[\"$\",\"time\",null,{\"dateTime\":\"2008\",\"children\":\"2008\"}],\" \",[\"$\",\"span\",null,{\"aria-hidden\":\"true\",\"children\":\"—\"}],\" \",[\"$\",\"time\",null,{\"dateTime\":\"2011\",\"children\":\"2011\"}]]}]]}]]}]]}],[\"$\",\"$La\",null,{\"className\":\"inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 group mt-6 w-full\",\"href\":\"#\",\"children\":[\"Download CV\",[\"$\",\"svg\",null,{\"viewBox\":\"0 0 16 16\",\"fill\":\"none\",\"aria-hidden\":\"true\",\"className\":\"h-4 w-4 stroke-zinc-400 transition group-active:stroke-zinc-600 dark:group-hover:stroke-zinc-50 dark:group-active:stroke-zinc-50\",\"children\":[\"$\",\"path\",null,{\"d\":\"M4.75 8.75 8 12.25m0 0 3.25-3.5M8 12.25v-8.5\",\"strokeWidth\":\"1.5\",\"strokeLinecap\":\"round\",\"strokeLinejoin\":\"round\"}]}]]}]]}]]}]]}]}]}]}]}]]\n"])</script>
<next-route-announcer style="position: absolute;"></next-route-announcer>
</body>

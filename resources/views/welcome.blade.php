<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Just Fucking Use PHP</title>
        <meta name="description" content="The language that powers 77% of the web has been completely reborn.">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700&family=jetbrains-mono:400,700" rel="stylesheet" />

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Space Grotesk', system-ui, sans-serif;
                background: #09090b;
                color: #d4d4d8;
                line-height: 1.8;
                font-size: 1.125rem;
            }

            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 3rem 2rem 6rem;
            }

            .nav {
                display: flex;
                gap: 2rem;
                margin-bottom: 4rem;
                font-size: 0.875rem;
                font-family: 'JetBrains Mono', monospace;
            }

            .nav a {
                color: #71717a;
                text-decoration: none;
                transition: color 0.2s;
            }

            .nav a:hover {
                color: #a855f7;
            }

            h1 {
                font-size: clamp(3rem, 10vw, 5rem);
                font-weight: 700;
                line-height: 1.1;
                margin-bottom: 1rem;
                color: #fafafa;
                letter-spacing: -0.02em;
            }

            h1 .highlight {
                color: #a855f7;
            }

            .subtitle {
                font-size: 1.5rem;
                color: #71717a;
                margin-bottom: 3rem;
            }

            h2 {
                font-size: 1.75rem;
                font-weight: 600;
                margin-top: 4rem;
                margin-bottom: 1.5rem;
                color: #fafafa;
            }

            h3 {
                font-size: 1.25rem;
                font-weight: 600;
                color: #fafafa;
                margin-top: 2rem;
                margin-bottom: 0.75rem;
            }

            p {
                margin-bottom: 1.5rem;
            }

            a {
                color: #a855f7;
                text-decoration: underline;
                text-underline-offset: 3px;
            }

            a:hover {
                text-decoration: none;
            }

            hr {
                border: none;
                border-top: 1px solid #27272a;
                margin: 4rem 0;
            }

            blockquote {
                border-left: 3px solid #a855f7;
                padding-left: 1.5rem;
                margin: 2rem 0;
                font-style: italic;
                color: #a1a1aa;
            }

            code {
                font-family: 'JetBrains Mono', monospace;
                background: #18181b;
                padding: 0.2rem 0.5rem;
                border-radius: 4px;
                font-size: 0.9em;
            }

            pre {
                font-family: 'JetBrains Mono', monospace;
                background: #18181b;
                padding: 1.5rem;
                border-radius: 8px;
                overflow-x: auto;
                margin: 2rem 0;
                font-size: 0.875rem;
                line-height: 1.6;
            }

            pre code {
                background: none;
                padding: 0;
            }

            .break {
                text-align: center;
                font-size: 1.5rem;
                margin: 3rem 0;
                color: #3f3f46;
                letter-spacing: 0.5rem;
            }

            strong {
                color: #fafafa;
                font-weight: 600;
            }

            .tools {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
                margin: 2rem 0;
            }

            .tool {
                padding: 1rem;
                background: #18181b;
                border-radius: 8px;
                border: 1px solid #27272a;
            }

            .tool strong {
                display: block;
                margin-bottom: 0.25rem;
            }

            .tool span {
                font-size: 0.875rem;
                color: #71717a;
            }

            .start-option {
                margin: 1.5rem 0;
                padding: 1.5rem;
                background: #18181b;
                border-radius: 8px;
                border: 1px solid #27272a;
            }

            .start-option strong {
                font-size: 1.125rem;
            }

            .start-option p {
                margin: 0.5rem 0 1rem;
                font-size: 0.95rem;
            }

            .start-option code {
                display: block;
                margin-top: 0.5rem;
                font-size: 0.8rem;
                color: #a855f7;
            }

            footer {
                margin-top: 6rem;
                padding-top: 2rem;
                border-top: 1px solid #27272a;
                font-size: 0.875rem;
                color: #52525b;
                font-family: 'JetBrains Mono', monospace;
            }

            footer a {
                color: #71717a;
                text-decoration: none;
            }

            footer a:hover {
                color: #a855f7;
            }

            .footer-links {
                display: flex;
                gap: 1.5rem;
                flex-wrap: wrap;
            }

            @media (max-width: 640px) {
                .tools {
                    grid-template-columns: 1fr;
                }
                .nav {
                    gap: 1rem;
                    flex-wrap: wrap;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="nav">
                <a href="#evolution">The Evolution</a>
                <a href="#tools">Tools</a>
                <a href="#start">Start</a>
            </nav>

            <h1>Why <span class="highlight">PHP</span> in 2025?</h1>
            <p class="subtitle">The language that powers 77% of the web has been completely reborn.</p>

            <p>Stop pretending PHP is still the language from 2004. It's not. Modern PHP has JIT compilation, fibers, enums, attributes, readonly properties, and a type system that rivals TypeScript.</p>

            <p>No build steps. No transpilation. No bundling. No 900MB <code>node_modules</code>. Just write code and deploy. That's the superpower everyone forgot about.</p>

            <div class="break">• • •</div>

            <section id="evolution">
                <h2>The Evolution</h2>

                <p>Modern PHP isn't just better. It's unrecognizable from its past.</p>

                <h3>It Just Works™</h3>
                <p>No webpack config nightmares. No fighting with bundlers. No waiting for builds. Deploy anywhere, scale infinitely. PHP's pragmatic simplicity isn't a weakness—it's the whole fucking point.</p>

                <h3>Planet-Scale Proven</h3>
                <p>Facebook, Wikipedia, WordPress, Slack, Etsy—billions of requests daily. When you need reliability at scale, PHP delivers. It's not theoretical. It's battle-tested for 30 years.</p>

                <h3>Modern Language Features</h3>
                <p>PHP 8.4 ships with everything you need:</p>

                <pre><code>&lt;?php

readonly class User
{
    public function __construct(
        public string $name,
        public Email $email,
        public Role $role = Role::User,
    ) {}
}

$users = $repository
    ->query()
    ->where('active', true)
    ->get()
    ->map(fn (User $user) => $user->name);</code></pre>

                <p>Clean. Typed. Expressive. No semicolon drama, no indentation wars. Just readable code.</p>
            </section>

            <section id="tools">
                <h2>World-Class Tools</h2>

                <p>The PHP ecosystem in 2025 rivals anything out there:</p>

                <div class="tools">
                    <div class="tool">
                        <strong>Composer</strong>
                        <span>Cargo/npm for PHP</span>
                    </div>
                    <div class="tool">
                        <strong>Pest</strong>
                        <span>Jest-style testing</span>
                    </div>
                    <div class="tool">
                        <strong>PHPStan</strong>
                        <span>TypeScript-like type safety</span>
                    </div>
                    <div class="tool">
                        <strong>Rector</strong>
                        <span>Automated refactoring</span>
                    </div>
                    <div class="tool">
                        <strong>Laravel</strong>
                        <span>Rails/Next.js for PHP</span>
                    </div>
                    <div class="tool">
                        <strong>FrankenPHP</strong>
                        <span>Modern app server</span>
                    </div>
                </div>

                <p>PHPStan at level max catches bugs before runtime. Pest ensures 100% type coverage. Rector upgrades your entire codebase automatically. This isn't your grandfather's PHP.</p>

                <blockquote>
                    PHP 8.4 with JIT is 3x faster than Python, Ruby, and often Node.js. Backed by the PHP Foundation and industry giants with annual releases like clockwork.
                </blockquote>
            </section>

            <div class="break">• • •</div>

            <section id="start">
                <h2>Start Today</h2>

                <p>One command. Zero config. Production-ready.</p>

                <div class="start-option">
                    <strong>Laravel</strong>
                    <p>Full-stack framework with batteries included. Auth, database, queues, and more.</p>
                    <code>composer create-project laravel/laravel app</code>
                </div>

                <div class="start-option">
                    <strong>Symfony</strong>
                    <p>High-performance framework for complex applications. Modular and flexible.</p>
                    <code>symfony new my_project --webapp</code>
                </div>

                <div class="start-option">
                    <strong>Slim</strong>
                    <p>Micro-framework for APIs and microservices. Fast and minimalist.</p>
                    <code>composer create-project slim/slim-skeleton app</code>
                </div>

                <div class="start-option">
                    <strong>Vanilla PHP</strong>
                    <p>Start from scratch. Full control, no dependencies.</p>
                    <code>mkdir app && cd app && php -S localhost:8000</code>
                </div>

                <p>Or try it instantly in your browser at <a href="https://php.new" target="_blank">php.new</a></p>
            </section>

            <hr>

            <p><strong>Join the renaissance.</strong> Write code that's type-safe, blazing fast, and beautiful. The future is being built with modern PHP—and you're already late.</p>

            <p>
                <a href="https://php.net" target="_blank">php.net</a> ·
                <a href="https://laravel.com" target="_blank">laravel.com</a> ·
                <a href="https://pestphp.com" target="_blank">pestphp.com</a>
            </p>

            <footer>
                <div class="footer-links">
                    <span>Made by <a href="https://twitter.com/enunomaduro" target="_blank">Nuno Maduro</a></span>
                    <a href="https://github.com/nunomaduro" target="_blank">GitHub</a>
                    <a href="https://twitter.com/enunomaduro" target="_blank">Twitter</a>
                </div>
            </footer>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certificados Digital Brasil - Certificados Digitais A1</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-white">
    <!-- Header/Navigation -->
    <header class="relative bg-white">
        <nav class="mx-auto max-w-7xl px-6 lg:px-8" aria-label="Top">
            <div class="flex w-full items-center justify-between border-b border-gray-200 py-6">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-blue-600">
                        CDB
                    </a>
                </div>
                <div class="ml-10 hidden space-x-8 lg:block">
                    <a href="#features" class="text-base font-medium text-gray-500 hover:text-gray-900">Vantagens</a>
                    <a href="#certificates" class="text-base font-medium text-gray-500 hover:text-gray-900">Certificados</a>
                    <a href="#pricing" class="text-base font-medium text-gray-500 hover:text-gray-900">Preços</a>
                    <a href="#testimonials" class="text-base font-medium text-gray-500 hover:text-gray-900">Depoimentos</a>
                </div>
                <div class="ml-10 space-x-4">
                    <a href="#contact" class="inline-block rounded-md border border-transparent bg-blue-600 px-4 py-2 text-base font-medium text-white hover:bg-blue-700">Comprar Agora</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="relative isolate overflow-hidden bg-white">
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
                <div class="mt-24 sm:mt-32 lg:mt-16">
                    <a href="#" class="inline-flex space-x-6">
                        <span class="rounded-full bg-blue-600/10 px-3 py-1 text-sm font-semibold leading-6 text-blue-600 ring-1 ring-inset ring-blue-600/10">Novidade</span>
                        <span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-600">
                            <span>Certificado A1 por apenas R$ 100,00</span>
                        </span>
                    </a>
                </div>
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Certificado Digital com praticidade e segurança</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Emita seu certificado digital de forma rápida, segura e 100% online. Tenha acesso a diversos serviços governamentais e empresariais com a garantia de autenticidade que só um certificado digital oferece.
                </p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="#pricing" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Comprar Agora</a>
                    <a href="#features" class="text-sm font-semibold leading-6 text-gray-900">Saiba mais <span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2274&amp;q=80" alt="Certificado Digital Interface" class="w-[76rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-blue-600">Vantagens</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tudo que você pode fazer com seu Certificado Digital</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Descubra como o certificado digital pode facilitar sua vida e seus negócios, garantindo segurança e praticidade em todas as suas operações digitais.</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                            <svg class="h-5 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                            </svg>
                            Segurança Garantida
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Proteção total em suas transações digitais com criptografia avançada e validação de identidade reconhecida legalmente.</p>
                        </dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                            <svg class="h-5 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.75 10.818v2.614A3.13 3.13 0 0011.888 13c.482-.315.612-.648.612-.875 0-.227-.13-.56-.612-.875a3.13 3.13 0 00-1.138-.432zM8.33 8.62c.053.055.115.11.184.164.208.16.46.284.736.363V6.603a2.45 2.45 0 00-.35.13c-.14.065-.27.143-.386.233-.377.292-.514.627-.514.909 0 .184.058.39.202.592.037.051.08.102.128.152z" />
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-6a.75.75 0 01.75.75v.316a3.78 3.78 0 011.653.713c.426.33.744.74.925 1.2a.75.75 0 01-1.395.55 1.35 1.35 0 00-.447-.563 2.187 2.187 0 00-.736-.363V9.3c.698.093 1.383.32 1.959.696.787.514 1.29 1.27 1.29 2.13 0 .86-.504 1.616-1.29 2.13-.576.377-1.261.603-1.96.696v.299a.75.75 0 11-1.5 0v-.3c-.697-.092-1.382-.318-1.958-.695-.482-.315-.857-.717-1.078-1.188a.75.75 0 111.359-.636c.08.173.245.376.54.569.313.205.706.353 1.138.432v-2.748a3.782 3.782 0 01-1.653-.713C6.9 9.433 6.5 8.681 6.5 7.875c0-.805.4-1.558 1.097-2.096a3.78 3.78 0 011.653-.713V4.75A.75.75 0 0110 4z" clip-rule="evenodd" />
                            </svg>
                            Economia de Tempo e Dinheiro
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Realize transações e assine documentos digitalmente, eliminando custos com deslocamento e impressões.</p>
                        </dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                            <svg class="h-5 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z" clip-rule="evenodd" />
                            </svg>
                            Praticidade e Agilidade
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Emissão 100% online e rápida, com validação em minutos e suporte técnico especializado.</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Certificates Section -->
    <div id="certificates" class="bg-gray-50 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-blue-600">Certificados</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Escolha o certificado ideal para você</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Oferecemos diferentes tipos de certificados digitais para atender às suas necessidades específicas.</p>
            </div>

            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                    <!-- Certificado A1 -->
                    <div class="flex flex-col rounded-3xl bg-white p-8 shadow-lg ring-1 ring-gray-200">
                        <dt class="text-2xl font-semibold leading-7 text-gray-900">
                            Certificado Digital A1
                            <span class="ml-4 inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Mais Popular</span>
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Certificado digital armazenado diretamente no computador, ideal para empresas e profissionais que precisam de praticidade.</p>
                            <ul class="mt-4 space-y-3">
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    Validade de 1 ano
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    Instalação no computador
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    Emissão 100% online
                                </li>
                            </ul>
                        </dd>
                    </div>

                    <!-- Certificado A3 -->
                    <div class="flex flex-col rounded-3xl bg-white p-8 shadow-lg ring-1 ring-gray-200">
                        <dt class="text-2xl font-semibold leading-7 text-gray-900">
                            Certificado Digital A3
                            <span class="ml-4 inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-600/20">Mais Seguro</span>
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Certificado digital armazenado em dispositivo criptográfico (token ou cartão), oferecendo maior segurança.</p>
                            <ul class="mt-4 space-y-3">
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    Validade de 3 anos
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    Token/Cartão incluso
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    Máxima segurança
                                </li>
                            </ul>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div id="testimonials" class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-xl text-center">
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-blue-600">Depoimentos</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Clientes satisfeitos em todo o Brasil</p>
            </div>
            <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
                <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                    <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                        <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                            <blockquote class="text-gray-900">
                                <p>"Processo super rápido e prático. Em menos de 30 minutos consegui emitir meu certificado digital A1 e já estava utilizando para assinar documentos."</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <div>
                                    <div class="font-semibold text-gray-900">Carlos Silva</div>
                                    <div class="text-gray-600">Empresário</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                        <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                            <blockquote class="text-gray-900">
                                <p>"Atendimento excepcional! A equipe me ajudou a escolher o certificado ideal para minha empresa e me orientou em todo o processo."</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <div>
                                    <div class="font-semibold text-gray-900">Ana Santos</div>
                                    <div class="text-gray-600">Contadora</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                        <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                            <blockquote class="text-gray-900">
                                <p>"Já renovei meu certificado A3 duas vezes com a CDB. Sempre com muita segurança e praticidade. Recomendo!"</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <div>
                                    <div class="font-semibold text-gray-900">Roberto Oliveira</div>
                                    <div class="text-gray-600">Advogado</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="bg-gray-50 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Preços acessíveis para todos</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Escolha a melhor forma de pagamento e emita seu certificado digital hoje mesmo.</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-10 lg:flex-auto">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900">Certificado Digital A1</h3>
                    <p class="mt-6 text-base leading-7 text-gray-600">
                        Certificado digital com validade de 1 ano, ideal para empresas e profissionais que precisam de praticidade no dia a dia.
                    </p>
                    <div class="mt-10 flex items-center gap-x-4">
                        <h4 class="flex-none text-sm font-semibold leading-6 text-blue-600">O que está incluído</h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Emissão 100% online
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Suporte técnico
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Validação em minutos
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            Garantia de 30 dias
                        </li>
                    </ul>
                </div>
                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                    <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto max-w-xs px-8">
                            <p class="text-base font-semibold text-gray-600">Pagamento via PIX</p>
                            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                <span class="text-5xl font-bold tracking-tight text-gray-900">R$ 100</span>
                                <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">,00</span>
                            </p>
                            <p class="mt-6 text-base font-semibold text-gray-600">ou</p>
                            <p class="mt-2 flex items-baseline justify-center gap-x-2">
                                <span class="text-3xl font-bold tracking-tight text-gray-900">R$ 105</span>
                                <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">,00</span>
                            </p>
                            <p class="mt-1 text-sm text-gray-600">via cartão de crédito</p>
                            <a href="#contact" class="mt-10 block w-full rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                                Comprar Agora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Final CTA Section -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
                <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Comece agora mesmo
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">
                    Emita seu certificado digital de forma rápida, segura e 100% online. Conte com nossa equipe especializada para te auxiliar em todo o processo.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#contact" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Solicitar Certificado
                    </a>
                    <a href="#features" class="text-sm font-semibold leading-6 text-white">
                        Saiba mais <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

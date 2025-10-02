<!-- About Section -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-4">
            <span class="text-gold text-sm font-medium">Criadora do Método</span>
        </div>

        <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-teal text-center mb-16 px-4">
            Conheça a Psicóloga Márcia Mattos
        </h2>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div class="order-2 md:order-1">
                <div class="space-y-6 text-lg px-4" style="color: hsl(var(--foreground));">
                    <p>
                        <span class="font-bold text-teal">Psicóloga clínica especialista</span> em ansiedade e medos, 
                        Márcia Mattos criou o Método MASD após anos de experiência ajudando mulheres a superarem o medo de dirigir.
                    </p>
                    <p>
                        O que antes era oferecido apenas em atendimentos presenciais de 
                        <span class="font-bold">R$1.350</span>, agora está acessível a todas as mulheres 
                        que desejam conquistar sua liberdade no volante.
                    </p>
                    <p>
                        Com uma abordagem que vai além da prática, Márcia trabalha a 
                        <span class="font-bold text-teal">raiz emocional</span> do medo, 
                        proporcionando resultados duradouros e transformadores.
                    </p>
                </div>
            </div>

            <div class="order-1 md:order-2">
                <div class="relative">
                    <?php 
                    $marcia_image = get_template_directory_uri() . '/assets/images/marcia-mattos.jpg';
                    ?>
                    <img 
                        src="<?php echo esc_url($marcia_image); ?>" 
                        alt="Psicóloga Márcia Mattos - Criadora do Método MASD" 
                        class="rounded-2xl shadow-2xl w-full"
                    />
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $features = array(
                array(
                    'icon' => 'award',
                    'title' => 'Método Validado',
                    'description' => 'Testado e aprovado em centenas de atendimentos presenciais'
                ),
                array(
                    'icon' => 'brain',
                    'title' => 'Especialista em Ansiedade',
                    'description' => 'Anos de experiência tratando medos e ansiedade na prática clínica'
                ),
                array(
                    'icon' => 'trending-up',
                    'title' => 'Resultados Comprovados',
                    'description' => 'Mulheres de todo Brasil já conquistaram sua independência'
                )
            );
            
            foreach ($features as $feature) : ?>
                <div class="text-center space-y-4">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto" style="background-color: hsl(var(--teal-light));">
                        <i data-lucide="<?php echo esc_attr($feature['icon']); ?>" class="h-8 w-8 text-teal"></i>
                    </div>
                    <h3 class="text-xl font-bold text-teal"><?php echo esc_html($feature['title']); ?></h3>
                    <p style="color: hsl(var(--muted-foreground));"><?php echo esc_html($feature['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Method Section -->
<section class="py-20 px-4" style="background: linear-gradient(to bottom, white, hsl(var(--teal-light)));">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-4">
            <span class="text-gold text-sm font-medium">O Método</span>
        </div>

        <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-teal text-center mb-8 px-4">
            O que é o Método MASD?
        </h2>

        <p class="text-base sm:text-lg md:text-xl text-center max-w-4xl mx-auto mb-16 px-4" style="color: hsl(var(--foreground));">
            Um método psicológico e prático que atua na 
            <span class="font-bold text-teal">raiz emocional do medo</span>, não apenas na 
            técnica de direção. É assim que você conquista resultados reais e duradouros.
        </p>

        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <?php
            $method_features = array(
                array(
                    'icon' => 'brain',
                    'title' => 'Técnicas de Controle da Ansiedade',
                    'description' => 'Aprenda a gerenciar seus pensamentos e emoções antes e durante a direção'
                ),
                array(
                    'icon' => 'heart',
                    'title' => 'Reprogramação Emocional',
                    'description' => 'Trabalhe a raiz do medo e transforme sua relação com o volante'
                ),
                array(
                    'icon' => 'book-open',
                    'title' => 'Exercícios Guiados',
                    'description' => 'Passo a passo para se preparar emocionalmente antes da prática'
                ),
                array(
                    'icon' => 'users',
                    'title' => 'Comunidade Exclusiva',
                    'description' => 'Troque experiências com outras alunas e receba apoio constante'
                )
            );
            
            foreach ($method_features as $feature) : ?>
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center mb-6 border-2" style="background-color: hsl(var(--gold) / 0.1); border-color: hsl(var(--gold) / 0.2);">
                        <i data-lucide="<?php echo esc_attr($feature['icon']); ?>" class="h-7 w-7 text-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-teal mb-3"><?php echo esc_html($feature['title']); ?></h3>
                    <p style="color: hsl(var(--muted-foreground));"><?php echo esc_html($feature['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="bg-teal text-white rounded-2xl p-8 md:p-12 mb-16">
            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-center">
                Não é só sobre aprender a dirigir...
            </h3>
            <p class="text-lg text-center max-w-3xl mx-auto opacity-90">
                É sobre transformar sua relação com o medo, conquistar confiança e liberdade. 
                O Método MASD trabalha o lado psicológico que nenhuma autoescola ensina.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $stats = array(
                array('icon' => 'clock', 'value' => '100%', 'label' => 'Online e no seu ritmo'),
                array('icon' => 'shield', 'value' => '7 dias', 'label' => 'Garantia incondicional'),
                array('icon' => 'infinity', 'value' => '24/7', 'label' => 'Acesso vitalício')
            );
            
            foreach ($stats as $stat) : ?>
                <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                    <i data-lucide="<?php echo esc_attr($stat['icon']); ?>" class="h-12 w-12 text-gold mx-auto mb-4"></i>
                    <div class="text-4xl md:text-5xl font-bold text-teal mb-2"><?php echo esc_html($stat['value']); ?></div>
                    <p class="text-lg" style="color: hsl(var(--muted-foreground));"><?php echo esc_html($stat['label']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

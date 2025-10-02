<!-- Benefits Section -->
<section class="py-20 px-4" style="background: linear-gradient(to bottom, hsl(var(--teal-light)), white);">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-teal mb-4 px-4">
                Imagine sua vida com total liberdade para dirigir
            </h2>
            <p class="text-base sm:text-lg md:text-xl px-4" style="color: hsl(var(--muted-foreground));">
                É hora de transformar o medo em confiança e conquistar a independência que você merece
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <?php
            $benefits = array(
                array(
                    'icon' => 'car',
                    'title' => 'Liberdade Total',
                    'description' => 'Vá onde quiser, quando quiser, sem depender de ninguém'
                ),
                array(
                    'icon' => 'shield',
                    'title' => 'Confiança no Volante',
                    'description' => 'Dirija com segurança e tranquilidade, sem ansiedade'
                ),
                array(
                    'icon' => 'briefcase',
                    'title' => 'Novas Oportunidades',
                    'description' => 'Aceite aquele emprego ou projeto que exige mobilidade'
                ),
                array(
                    'icon' => 'wallet',
                    'title' => 'Economia e Praticidade',
                    'description' => 'Economize com Uber e tenha total autonomia no dia a dia'
                )
            );
            
            foreach ($benefits as $benefit) : ?>
                <div class="text-center space-y-4">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto border-2" style="background-color: hsl(var(--gold) / 0.1); border-color: hsl(var(--gold) / 0.2);">
                        <i data-lucide="<?php echo esc_attr($benefit['icon']); ?>" class="h-8 w-8 text-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-teal"><?php echo esc_html($benefit['title']); ?></h3>
                    <p style="color: hsl(var(--muted-foreground));"><?php echo esc_html($benefit['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
            <div class="grid md:grid-cols-2 gap-6">
                <?php
                $achievements = array(
                    'Levar seus filhos na escola sem depender de ninguém',
                    'Viajar sem medo e com total autonomia',
                    'Assumir oportunidades profissionais que antes não podia',
                    'Sentir-se orgulhosa e confiante ao volante'
                );
                
                foreach ($achievements as $achievement) : ?>
                    <div class="flex items-start gap-3">
                        <i data-lucide="check" class="h-6 w-6 text-gold flex-shrink-0 mt-1"></i>
                        <p class="text-lg" style="color: hsl(var(--foreground));"><?php echo esc_html($achievement); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="mt-8 text-center">
                <a href="<?php echo esc_url(masd_get_purchase_link()); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary text-base md:text-lg px-6 md:px-8 py-4 md:py-6 inline-flex sm:inline-flex w-full sm:w-auto">
                    Começar minha transformação
                    <i data-lucide="arrow-right" class="w-4 h-4 md:w-5 md:h-5"></i>
                </a>
            </div>
        </div>
    </div>
</section>

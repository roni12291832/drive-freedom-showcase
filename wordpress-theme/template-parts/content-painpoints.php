<!-- Pain Points Section -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
            <span class="text-sm font-medium mb-4 block" style="color: hsl(var(--destructive));">
                Você se identifica com isso?
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-teal mb-6 px-4">
                O medo de dirigir está limitando sua vida?
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-12">
            <?php
            $pain_points = array(
                'Depende do marido, amigos ou Uber para ir a qualquer lugar',
                'Sente vergonha por ter CNH e não dirigir',
                'Ansiedade só de pensar em pegar o volante',
                'Já tentou autoescola ou instrutores e não funcionou',
                'Perdeu oportunidades de trabalho por não dirigir',
                'Sente-se presa e sem liberdade no dia a dia'
            );
            
            foreach ($pain_points as $point) : ?>
                <div class="flex items-start gap-4 p-6 rounded-lg border" style="background-color: hsl(var(--secondary)); border-color: hsl(var(--border));">
                    <i data-lucide="x-circle" class="h-6 w-6 flex-shrink-0 mt-1" style="color: hsl(var(--destructive));"></i>
                    <p class="text-lg" style="color: hsl(var(--foreground));"><?php echo esc_html($point); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center space-y-4 max-w-3xl mx-auto px-4">
            <p class="text-base sm:text-lg md:text-xl font-medium" style="color: hsl(var(--muted-foreground));">
                Se você sente isso, saiba que não está sozinha.
            </p>
            <p class="text-base sm:text-lg" style="color: hsl(var(--muted-foreground));">
                Milhares de mulheres já superaram esse medo e conquistaram sua independência. 
                <span class="text-teal font-semibold">Agora é a sua vez.</span>
            </p>
        </div>

        <div class="mt-12 text-center">
            <a href="<?php echo esc_url(masd_get_purchase_link()); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary text-base md:text-lg px-6 md:px-8 py-4 md:py-6 inline-flex sm:inline-flex w-full sm:w-auto">
                Quero superar meu medo agora
                <i data-lucide="arrow-right" class="w-4 h-4 md:w-5 md:h-5"></i>
            </a>
        </div>
    </div>
</section>

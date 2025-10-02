<!-- Testimonials Section -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-teal text-center mb-4 px-4">
            Histórias de transformação real
        </h2>
        <p class="text-base sm:text-lg md:text-xl text-center mb-12 px-4" style="color: hsl(var(--muted-foreground));">
            Veja como o Método MASD mudou a vida dessas mulheres
        </p>

        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <?php
            $testimonials = array(
                array(
                    'video' => 'testimonial-1.mp4',
                    'name' => 'Isabel',
                    'description' => 'Conquistou autonomia e independência'
                ),
                array(
                    'video' => 'testimonial-2.mp4',
                    'name' => 'Aluna MASD',
                    'description' => 'Superou o medo e dirige com confiança'
                ),
                array(
                    'video' => 'testimonial-3.mp4',
                    'name' => 'Aluna MASD',
                    'description' => 'Realizou o sonho de dirigir'
                ),
                array(
                    'video' => 'testimonial-4.mp4',
                    'name' => 'Aluna MASD',
                    'description' => 'Transformou sua vida'
                )
            );
            
            foreach ($testimonials as $testimonial) : 
                $video_path = get_template_directory_uri() . '/assets/videos/' . $testimonial['video'];
            ?>
                <div class="rounded-2xl overflow-hidden shadow-lg" style="background-color: hsl(var(--secondary));">
                    <video controls class="w-full bg-gray-900" style="aspect-ratio: 16/9;" preload="metadata">
                        <source src="<?php echo esc_url($video_path); ?>" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-teal mb-1"><?php echo esc_html($testimonial['name']); ?></h3>
                        <p style="color: hsl(var(--muted-foreground));"><?php echo esc_html($testimonial['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="rounded-lg p-8 max-w-3xl mx-auto border-l-4" style="background-color: hsl(var(--gold) / 0.1); border-color: hsl(var(--gold));">
            <i data-lucide="quote" class="h-10 w-10 text-gold mb-4"></i>
            <p class="text-lg italic" style="color: hsl(var(--foreground));">
                "Tinha CNH há 6 anos e nunca dirigi sozinha. Em poucos dias já estava dirigindo sem medo."
            </p>
        </div>
    </div>
</section>

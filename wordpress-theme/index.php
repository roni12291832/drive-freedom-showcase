<?php
/**
 * Template principal do Método MASD
 * Landing page completa para o curso
 */

get_header();
?>

<!-- Hero Section -->
<section class="min-h-screen flex flex-col items-center justify-center px-4 py-20" style="background: linear-gradient(to bottom, white, hsl(var(--teal-light)));">
    <div class="max-w-5xl mx-auto text-center space-y-8">
        <div class="inline-block">
            <span class="px-6 py-2 rounded-full text-sm font-medium border" style="background-color: hsl(var(--gold-light)); color: hsl(var(--gold)); border-color: hsl(var(--gold) / 0.2);">
                Método Psicológico Comprovado
            </span>
        </div>

        <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-bold leading-tight px-4">
            Supere o <span class="text-gold">medo de dirigir</span> e conquiste sua 
            <span class="text-teal">liberdade no volante</span>
        </h1>

        <p class="text-base sm:text-lg md:text-xl px-4" style="color: hsl(var(--muted-foreground)); max-width: 48rem; margin: 0 auto;">
            Método psicológico exclusivo criado pela psicóloga clínica 
            <span class="font-semibold" style="color: hsl(var(--foreground));">Márcia Mattos</span>. 100% online, acessível e transformador.
        </p>

        <div class="flex flex-col items-center gap-6">
            <a href="<?php echo esc_url(masd_get_purchase_link()); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary text-base md:text-lg px-6 md:px-8 py-4 md:py-6 w-full sm:w-auto">
                Quero vencer o medo de dirigir agora
                <i data-lucide="arrow-right" class="w-4 h-4 md:w-5 md:h-5"></i>
            </a>

            <div class="flex flex-wrap items-center justify-center gap-6 text-sm">
                <div class="flex items-center gap-2">
                    <i data-lucide="check" class="h-5 w-5 text-gold"></i>
                    <span style="color: hsl(var(--muted-foreground));">Garantia de 7 dias</span>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="check" class="h-5 w-5 text-gold"></i>
                    <span style="color: hsl(var(--muted-foreground));">Acesso imediato</span>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="check" class="h-5 w-5 text-gold"></i>
                    <span style="color: hsl(var(--muted-foreground));">100% online</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Incluir seções adicionais
get_template_part('template-parts/content', 'painpoints');
get_template_part('template-parts/content', 'benefits');
get_template_part('template-parts/content', 'about');
get_template_part('template-parts/content', 'method');
get_template_part('template-parts/content', 'testimonials');
get_template_part('template-parts/content', 'pricing');

get_footer();

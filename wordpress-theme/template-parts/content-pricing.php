<!-- Pricing Section -->
<section class="py-20 px-4" style="background: linear-gradient(to bottom, hsl(var(--teal-light)), white);">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-teal text-center mb-6 px-4">
            Conquiste sua liberdade no volante hoje
        </h2>
        <p class="text-base sm:text-lg md:text-xl text-center mb-12 px-4" style="color: hsl(var(--muted-foreground));">
            Investimento muito menor do que alguns dias de Uber para ter liberdade para sempre
        </p>

        <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12" style="border: 4px solid hsl(var(--gold));">
            <div class="text-center mb-8">
                <span class="bg-gold text-teal px-6 py-2 rounded-full text-sm font-bold uppercase">
                    Oferta Especial
                </span>
            </div>

            <div class="text-center mb-8">
                <div class="text-lg line-through mb-2" style="color: hsl(var(--muted-foreground));">
                    R$ 1.350,00
                    <span class="text-sm ml-2">(valor do atendimento individual)</span>
                </div>
                <div class="text-5xl md:text-6xl font-bold text-teal mb-2"><?php echo esc_html(masd_get_price()); ?></div>
                <div class="text-xl" style="color: hsl(var(--muted-foreground));">ou 12x de R$ 20,27</div>
            </div>

            <div class="space-y-4 mb-8">
                <?php
                $features = array(
                    'Acesso imediato ao curso completo',
                    'Técnicas psicológicas comprovadas',
                    'Exercícios práticos guiados',
                    'Comunidade exclusiva de alunas',
                    'Suporte especializado',
                    'Atualizações gratuitas',
                    'Acesso vitalício ao conteúdo',
                    'Certificado de conclusão'
                );
                
                foreach ($features as $feature) : ?>
                    <div class="flex items-start gap-3">
                        <i data-lucide="check" class="h-6 w-6 text-gold flex-shrink-0 mt-1"></i>
                        <span class="text-lg"><?php echo esc_html($feature); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <a href="<?php echo esc_url(masd_get_purchase_link()); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-full bg-gold text-teal font-bold text-base sm:text-lg md:text-xl py-6 md:py-8 rounded-xl shadow-lg hover:opacity-90 transition-all no-underline">
                <span class="text-center">Sim, quero conquistar minha liberdade agora</span>
                <i data-lucide="arrow-right" class="ml-2 h-5 w-5 md:h-6 md:w-6 flex-shrink-0"></i>
            </a>

            <div class="mt-8 p-6 rounded-xl" style="background-color: hsl(var(--teal-light));">
                <h4 class="font-bold text-teal text-lg mb-3">
                    Garantia Incondicional de 7 Dias
                </h4>
                <p style="color: hsl(var(--muted-foreground));">
                    Teste o Método MASD por 7 dias. Se não sentir resultados ou não gostar por qualquer motivo, devolvemos 100% do seu dinheiro. Sem perguntas, sem burocracia.
                </p>
            </div>

            <div class="mt-6 flex items-center justify-center gap-6 text-sm flex-wrap" style="color: hsl(var(--muted-foreground));">
                <div class="flex items-center gap-2">
                    <i data-lucide="lock" class="h-4 w-4"></i>
                    <span>Pagamento 100% seguro</span>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="zap" class="h-4 w-4"></i>
                    <span>Acesso imediato após aprovação</span>
                </div>
            </div>
        </div>
    </div>
</section>

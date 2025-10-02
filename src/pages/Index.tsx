import { Hero } from "@/components/Hero";
import { PainPoints } from "@/components/PainPoints";
import { Benefits } from "@/components/Benefits";
import { About } from "@/components/About";
import { Method } from "@/components/Method";
import { Testimonials } from "@/components/Testimonials";
import { Pricing } from "@/components/Pricing";

const Index = () => {
  return (
    <div className="min-h-screen">
      <Hero />
      <PainPoints />
      <Benefits />
      <About />
      <Method />
      <Testimonials />
      <Pricing />
    </div>
  );
};

export default Index;

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SyliusShop/Cart/Summary/_coupon.html.twig */
class __TwigTemplate_117372de254292396fcb4d02d23c0661 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_coupon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_coupon.html.twig"));

        // line 1
        echo "<div id=\"sylius-coupon\" ";
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("cart-promotion-coupon");
        echo ">
    <div class=\"ui coupon action input\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "promotionCoupon", [], "any", false, false, false, 3), 'widget', $this->env->getFilter('sylius_merge_recursive')->getCallable()($this->env->getFunction('sylius_test_form_attribute')->getCallable()("cart-promotion-coupon-input"), ["attr" => ["form" => (isset($context["main_form"]) || array_key_exists("main_form", $context) ? $context["main_form"] : (function () { throw new RuntimeError('Variable "main_form" does not exist.', 3, $this->source); })()), "placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enter_your_code") . "...")]]));
        echo "
        <button type=\"submit\" id=\"sylius-save\" ";
        // line 4
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("apply-coupon-button");
        echo " class=\"ui teal icon labeled button\" form=\"";
        echo twig_escape_filter($this->env, (isset($context["main_form"]) || array_key_exists("main_form", $context) ? $context["main_form"] : (function () { throw new RuntimeError('Variable "main_form" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\"><i class=\"ticket icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_coupon"), "html", null, true);
        echo "</button>
    </div>
    <br>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "promotionCoupon", [], "any", false, false, false, 7), 'errors');
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Cart/Summary/_coupon.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  63 => 7,  53 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"sylius-coupon\" {{ sylius_test_html_attribute('cart-promotion-coupon') }}>
    <div class=\"ui coupon action input\">
        {{ form_widget(form.promotionCoupon, sylius_test_form_attribute('cart-promotion-coupon-input')|sylius_merge_recursive({'attr': {'form': main_form, 'placeholder': 'sylius.ui.enter_your_code'|trans~'...'}})) }}
        <button type=\"submit\" id=\"sylius-save\" {{ sylius_test_html_attribute('apply-coupon-button') }} class=\"ui teal icon labeled button\" form=\"{{ main_form }}\"><i class=\"ticket icon\"></i> {{ 'sylius.ui.apply_coupon'|trans }}</button>
    </div>
    <br>
    {{ form_errors(form.promotionCoupon) }}
</div>
", "@SyliusShop/Cart/Summary/_coupon.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_coupon.html.twig");
    }
}

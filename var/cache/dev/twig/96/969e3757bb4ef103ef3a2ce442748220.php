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

/* @SyliusAdmin/Order/History/_addresses.html.twig */
class __TwigTemplate_95a92816cd5b0fa12e65f9e7eabc14d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/History/_addresses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/History/_addresses.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            ";
        // line 4
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "@SyliusAdmin/Order/History/_addresses.html.twig", 4)->display(twig_array_merge($context, ["type" => "shipping", "address" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 4, $this->source); })()), "shippingAddress", [], "any", false, false, false, 4)]));
        // line 5
        echo "        </div>
        <div class=\"column\">
            ";
        // line 7
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "@SyliusAdmin/Order/History/_addresses.html.twig", 7)->display(twig_array_merge($context, ["type" => "billing", "address" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "billingAddress", [], "any", false, false, false, 7)]));
        // line 8
        echo "        </div>
    </div>
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
        return "@SyliusAdmin/Order/History/_addresses.html.twig";
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
        return array (  56 => 8,  54 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui segment\">
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            {% include '@SyliusAdmin/Order/History/_address.html.twig' with {'type': 'shipping', address: order.shippingAddress} %}
        </div>
        <div class=\"column\">
            {% include '@SyliusAdmin/Order/History/_address.html.twig' with {'type': 'billing', address: order.billingAddress} %}
        </div>
    </div>
</div>
", "@SyliusAdmin/Order/History/_addresses.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_addresses.html.twig");
    }
}
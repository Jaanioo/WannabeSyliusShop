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

/* @SyliusAdmin/Customer/Show/Details/_primary.html.twig */
class __TwigTemplate_95c08393659d94d5155870621df4ffbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Details/_primary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Details/_primary.html.twig"));

        // line 1
        echo "<div class=\"content\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" class=\"header\">
        ";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", false, false, false, 3), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))), "html", null, true);
        echo "
    </a>
    <div class=\"meta\">
        <span class=\"date\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 6, $this->source); })()), "createdAt", [], "any", false, false, false, 6)), "html", null, true);
        echo "</span>
        <br />
        ";
        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 8, $this->source); })()), "group", [], "any", false, false, false, 8))) {
            // line 9
            echo "            <span class=\"group\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.group_membership"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 9, $this->source); })()), "group", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
        ";
        }
        // line 11
        echo "    </div>
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
        return "@SyliusAdmin/Customer/Show/Details/_primary.html.twig";
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
        return array (  73 => 11,  65 => 9,  63 => 8,  56 => 6,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content\">
    <a href=\"{{ path('sylius_admin_customer_update', {'id': customer.id}) }}\" class=\"header\">
        {{ customer.fullName|default('sylius.ui.guest_customer'|trans) }}
    </a>
    <div class=\"meta\">
        <span class=\"date\">{{ 'sylius.ui.customer_since'|trans }} {{ customer.createdAt|date }}</span>
        <br />
        {% if customer.group is not null %}
            <span class=\"group\">{{ 'sylius.ui.group_membership'|trans }}: {{ customer.group }}</span>
        {% endif %}
    </div>
</div>
", "@SyliusAdmin/Customer/Show/Details/_primary.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Details/_primary.html.twig");
    }
}

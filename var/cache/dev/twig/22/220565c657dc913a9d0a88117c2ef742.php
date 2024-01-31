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

/* @SyliusAdmin/Product/Show/_configurableProduct.html.twig */
class __TwigTemplate_1a7b733316d014c556ef09202af8415c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Product/Show/_header.html.twig", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 5
        $this->loadTemplate("@SyliusAdmin/Product/Show/_taxonomy.html.twig", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 8
        $this->loadTemplate("@SyliusAdmin/Product/Show/_options.html.twig", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig", 8)->display($context);
        // line 9
        echo "    </div>
</div>
<div class=\"ui hidden divider\"></div>
";
        // line 12
        $this->loadTemplate("@SyliusAdmin/Product/Show/_media.html.twig", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig", 12)->display($context);
        // line 13
        echo "<div class=\"ui hidden divider\"></div>
";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Product/Show/_moreDetails.html.twig", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig", 14)->display($context);
        // line 15
        echo "<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Product/Show/_attributes.html.twig", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 21
        $this->loadTemplate("@SyliusAdmin/Product/Show/_associations.html.twig", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig", 21)->display($context);
        // line 22
        echo "    </div>
</div>
<div class=\"ui hidden divider\"></div>

";
        // line 26
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.configurable_product.show", $context);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_configurableProduct.html.twig";
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
        return array (  89 => 26,  83 => 22,  81 => 21,  77 => 19,  75 => 18,  70 => 15,  68 => 14,  65 => 13,  63 => 12,  58 => 9,  56 => 8,  52 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@SyliusAdmin/Product/Show/_header.html.twig' %}

<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_taxonomy.html.twig' %}
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_options.html.twig' %}
    </div>
</div>
<div class=\"ui hidden divider\"></div>
{% include '@SyliusAdmin/Product/Show/_media.html.twig' %}
<div class=\"ui hidden divider\"></div>
{% include '@SyliusAdmin/Product/Show/_moreDetails.html.twig' %}
<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_attributes.html.twig' %}
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_associations.html.twig' %}
    </div>
</div>
<div class=\"ui hidden divider\"></div>

{{ sylius_template_event('sylius.admin.configurable_product.show', _context) }}
", "@SyliusAdmin/Product/Show/_configurableProduct.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_configurableProduct.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e66994367b209e716db31e4a505c38c3e139c84d9e2f116f496b50c2f19f2815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66994367b209e716db31e4a505c38c3e139c84d9e2f116f496b50c2f19f2815->enter($__internal_e66994367b209e716db31e4a505c38c3e139c84d9e2f116f496b50c2f19f2815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5186c626e4454bf028db9b438a7860176c694023cd52b9b67a6e0d0ac083a002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5186c626e4454bf028db9b438a7860176c694023cd52b9b67a6e0d0ac083a002->enter($__internal_5186c626e4454bf028db9b438a7860176c694023cd52b9b67a6e0d0ac083a002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e66994367b209e716db31e4a505c38c3e139c84d9e2f116f496b50c2f19f2815->leave($__internal_e66994367b209e716db31e4a505c38c3e139c84d9e2f116f496b50c2f19f2815_prof);

        
        $__internal_5186c626e4454bf028db9b438a7860176c694023cd52b9b67a6e0d0ac083a002->leave($__internal_5186c626e4454bf028db9b438a7860176c694023cd52b9b67a6e0d0ac083a002_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_581069d675d7833aaddd51198695df8f6f8d004bd6a6d19e1318ac42090718a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581069d675d7833aaddd51198695df8f6f8d004bd6a6d19e1318ac42090718a5->enter($__internal_581069d675d7833aaddd51198695df8f6f8d004bd6a6d19e1318ac42090718a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dfb585994f083be6ef97e1521b3186e43ee058857020fccb76b9465e29f040eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb585994f083be6ef97e1521b3186e43ee058857020fccb76b9465e29f040eb->enter($__internal_dfb585994f083be6ef97e1521b3186e43ee058857020fccb76b9465e29f040eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dfb585994f083be6ef97e1521b3186e43ee058857020fccb76b9465e29f040eb->leave($__internal_dfb585994f083be6ef97e1521b3186e43ee058857020fccb76b9465e29f040eb_prof);

        
        $__internal_581069d675d7833aaddd51198695df8f6f8d004bd6a6d19e1318ac42090718a5->leave($__internal_581069d675d7833aaddd51198695df8f6f8d004bd6a6d19e1318ac42090718a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6146d789eee555e2b3eadc3466f54b07adad7af728e19a07f6a41b6eb8ca5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6146d789eee555e2b3eadc3466f54b07adad7af728e19a07f6a41b6eb8ca5e4->enter($__internal_a6146d789eee555e2b3eadc3466f54b07adad7af728e19a07f6a41b6eb8ca5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ffe1dbfb8e749b6f0e7dea2d76b0029518310c50c54ea9f40781cbc7c1ae35a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe1dbfb8e749b6f0e7dea2d76b0029518310c50c54ea9f40781cbc7c1ae35a3->enter($__internal_ffe1dbfb8e749b6f0e7dea2d76b0029518310c50c54ea9f40781cbc7c1ae35a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ffe1dbfb8e749b6f0e7dea2d76b0029518310c50c54ea9f40781cbc7c1ae35a3->leave($__internal_ffe1dbfb8e749b6f0e7dea2d76b0029518310c50c54ea9f40781cbc7c1ae35a3_prof);

        
        $__internal_a6146d789eee555e2b3eadc3466f54b07adad7af728e19a07f6a41b6eb8ca5e4->leave($__internal_a6146d789eee555e2b3eadc3466f54b07adad7af728e19a07f6a41b6eb8ca5e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b886afe87ae4f4498bd4922ac4cc11c48de2ad7f223450bfd7081d4ffca29aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b886afe87ae4f4498bd4922ac4cc11c48de2ad7f223450bfd7081d4ffca29aa2->enter($__internal_b886afe87ae4f4498bd4922ac4cc11c48de2ad7f223450bfd7081d4ffca29aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f06efda73341267bef23a29b58f5158f2905438bed2464cbdf9b86359b9ed74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f06efda73341267bef23a29b58f5158f2905438bed2464cbdf9b86359b9ed74->enter($__internal_9f06efda73341267bef23a29b58f5158f2905438bed2464cbdf9b86359b9ed74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f06efda73341267bef23a29b58f5158f2905438bed2464cbdf9b86359b9ed74->leave($__internal_9f06efda73341267bef23a29b58f5158f2905438bed2464cbdf9b86359b9ed74_prof);

        
        $__internal_b886afe87ae4f4498bd4922ac4cc11c48de2ad7f223450bfd7081d4ffca29aa2->leave($__internal_b886afe87ae4f4498bd4922ac4cc11c48de2ad7f223450bfd7081d4ffca29aa2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp2\\htdocs\\symfonyBlog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

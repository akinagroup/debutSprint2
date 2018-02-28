<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1f3e3ee580a4e034111ae627d3df12cdc59026b7bbc3b89101de5a995bc1402a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52e0201884bfe36fe5ca776cf9028aa947d2ef1bbc708044f2de1765b9d1ac6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e0201884bfe36fe5ca776cf9028aa947d2ef1bbc708044f2de1765b9d1ac6f->enter($__internal_52e0201884bfe36fe5ca776cf9028aa947d2ef1bbc708044f2de1765b9d1ac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c4d7c5d7dcb507a2ac6bfc9857fbe7ae68f737a9c35e76a675ac2b9bbbe58cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d7c5d7dcb507a2ac6bfc9857fbe7ae68f737a9c35e76a675ac2b9bbbe58cef->enter($__internal_c4d7c5d7dcb507a2ac6bfc9857fbe7ae68f737a9c35e76a675ac2b9bbbe58cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_52e0201884bfe36fe5ca776cf9028aa947d2ef1bbc708044f2de1765b9d1ac6f->leave($__internal_52e0201884bfe36fe5ca776cf9028aa947d2ef1bbc708044f2de1765b9d1ac6f_prof);

        
        $__internal_c4d7c5d7dcb507a2ac6bfc9857fbe7ae68f737a9c35e76a675ac2b9bbbe58cef->leave($__internal_c4d7c5d7dcb507a2ac6bfc9857fbe7ae68f737a9c35e76a675ac2b9bbbe58cef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

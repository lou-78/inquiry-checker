<?php

namespace App\Services;

class ClaudeService
{
    public function analyzeInquiry(string $text): array
    {
        $textLower = strtolower($text);

        $category = 'General';
        $priority = 'Low';
        $country = 'Unknown';

        if (
            str_contains($textLower, 'buy') ||
            str_contains($textLower, 'price') ||
            str_contains($textLower, 'quote')
        ) {
            $category = 'Sales';
        }

        if (
            str_contains($textLower, 'problem') ||
            str_contains($textLower, 'issue') ||
            str_contains($textLower, 'error')
        ) {
            $category = 'Support';
        }

        if (
            str_contains($textLower, 'partnership') ||
            str_contains($textLower, 'collaboration')
        ) {
            $category = 'Business';
        }

        if (
            str_contains($textLower, 'urgent') ||
            str_contains($textLower, 'asap')
        ) {
            $priority = 'High';
        } elseif (str_contains($textLower, 'soon')) {
            $priority = 'Medium';
        }

        if (str_contains($textLower, 'germany')) {
            $country = 'Germany';
        }

        if (str_contains($textLower, 'france')) {
            $country = 'France';
        }

        if (
            str_contains($textLower, 'usa') ||
            str_contains($textLower, 'united states')
        ) {
            $country = 'USA';
        }

        $summary = 'Customer sent a business inquiry.';
        if (strlen($text) < 120) {
            $summary = $text;
        }

        $suggestedReply = 'Thank you for your message. We will get back to you soon.';

        if ($category === 'Sales') {
            $suggestedReply = 'Thank you for your interest. We will send you more details about pricing and availability soon.';
        }

        if ($category === 'Support') {
            $suggestedReply = 'Thank you for your message. Our support team will look into the issue and contact you soon.';
        }

        if ($category === 'Business') {
            $suggestedReply = 'Thank you for your business proposal. We will review it and reply soon.';
        }

        return [
            'category' => $category,
            'priority' => $priority,
            'country' => $country,
            'summary' => $summary,
            'suggested_reply' => $suggestedReply,
        ];
    }
}
